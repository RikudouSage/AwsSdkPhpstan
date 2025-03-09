# AWS SDK PHPStan extension

This extension helps PHPStan to correctly determine the return type of all the SDK api calls.

**Table of contents**

<!-- TOC -->
* [AWS SDK PHPStan extension](#aws-sdk-phpstan-extension)
  * [Installation](#installation)
  * [Usage](#usage)
  * [How does it work?](#how-does-it-work)
  * [Fine-tuning](#fine-tuning)
<!-- TOC -->

## Installation

`composer require --dev rikudou/aws-sdk-phpstan`

If you also install [phpstan/extension-installer](https://github.com/phpstan/extension-installer) then you're all set!

<details>
  <summary>Manual installation</summary>

If you don't want to use `phpstan/extension-installer`, include extension.neon in your project's PHPStan config:

```
includes:
    - vendor/rikudou/aws-sdk-phpstan/extension.neon
```
</details>

## Usage

You can simply use AWS SDK as usual, except all return types are strongly typed and PHPStan knows exactly what type
each key is.

> Note that using `treatPhpDocTypesAsCertain: false` in your phpstan.neon makes this extension entirely useless
> as all errors reported by the strong typing will be ignored.

For example:

```php
$object = $this->s3Client->getObject([
    'Bucket' => 'my-cool-bucket',
    'Key' => 'test-file',
]);
if ($object->get('Name') === 'SomeName') {
    // todo do something
}
```

This prints the following:

`Strict comparison using === between null and 'SomeName' will always evaluate to false.`

That's because PHPStan knows that there's no property called `Name`!

Or something more specific:

```php
$object = $this->s3Client->getObject([
    'Bucket' => 'my-cool-bucket',
    'Key' => 'test-file',
]);
if ($object->get('ChecksumType') === 'md5') {
    // todo do something
}
```

ChecksumType indeed exists, but it's very strictly typed to only two possible values, neither of which is md5.
And indeed, PHPStan tells us:

`Strict comparison using === between 'COMPOSITE'|'FULL_OBJECT' and 'md5' will always evaluate to false.`

If you were to dump the PHPStan type of the `$object` variable, you'd get the following:

```
Aws\Result<array{
    Body: Psr\Http\Message\StreamInterface|resource|string,
    DeleteMarker: bool,
    AcceptRanges: string,
    Expiration: string,
    Restore: string,
    LastModified: DateTimeInterface,
    ContentLength: int,
    ETag: string,
    ChecksumCRC32: string,
    ChecksumCRC32C: string,
    ChecksumCRC64NVME: string,
    ChecksumSHA1: string,
    ChecksumSHA256: string,
    ChecksumType: 'COMPOSITE'|'FULL_OBJECT',
    MissingMeta: int,
    VersionId: string,
    CacheControl: string,
    ContentDisposition: string,
    ContentEncoding: string,
    ContentLanguage: string,
    ContentRange: string,
    ContentType: string,
    Expires: DateTimeInterface,
    WebsiteRedirectLocation: string,
    ServerSideEncryption: 'AES256'|'aws:kms'|'aws:kms:dsse',
    Metadata: array<string, string>,
    SSECustomerAlgorithm: string,
    SSECustomerKeyMD5: string,
    SSEKMSKeyId: string,
    BucketKeyEnabled: bool,
    StorageClass: 'DEEP_ARCHIVE'|'EXPRESS_ONEZONE'|'GLACIER'|'GLACIER_IR'|'INTELLIGENT_TIERING'|'ONEZONE_IA'|'OUTPOSTS'|'REDUCED_REDUNDANCY'|'SNOW'|'STANDARD'|'STANDARD_IA',
    RequestCharged: 'requester',
    ReplicationStatus: 'COMPLETE'|'COMPLETED'|'FAILED'|'PENDING'|'REPLICA',
    PartsCount: int,
    TagCount: int,
    ObjectLockMode: 'COMPLIANCE'|'GOVERNANCE',
    ObjectLockRetainUntilDate: DateTimeInterface,
    ObjectLockLegalHoldStatus: 'OFF'|'ON'
}>
```

## How does it work?

There's a build script that traverses the official AWS SDK for PHP data and extracts type information from them.
Afterwards it converts the information to a PHPStan extension class that provides dynamic types based on the method being
called (for example the [S3ClientReturnTypeExtension.](src/Types/S3ClientReturnTypeExtension.php)).

Additionally, the AWS `Result` class is made generic using a [stub file](stubs/Result.stub).

## Fine-tuning

By default, every single one of AWS clients is generated which can slow down PHPStan significantly and is rarely needed.
The build script is included as part of the package, so you can automatically generate only the classes that interest you,
for example if you wanted to only work with `S3Client` and `CloudFrontClient`, you could do the following:

**composer.json**:

```json5
{
  // your other settings
  "extra": {
    "aws-sdk-phpstan": {
      "only": [
        "Aws\\S3\\S3Client",
        "Aws\\CloudFront\\CloudFrontClient"
      ]
    }
  },
  // your other settings
}
```

Then, as part of your process, run the `vendor/bin/generate-aws-phpstan`. For example using the post install script
of composer.json:

```json5
{
  // your other settings
  "extra": {
    "aws-sdk-phpstan": {
      "only": [
        "Aws\\S3\\S3Client",
        "Aws\\CloudFront\\CloudFrontClient"
      ]
    }
  },
  "scripts": {
    "post-install-cmd": [
      // your other post install scripts
      "generate-aws-phpstan"
    ],
    "post-update-cmd": [
      // your other post update scripts 
      "generate-aws-phpstan"
    ]
  }
  // your other settings
}
```

If you now check the `vendor/rikudou/aws-sdk-phpstan/src/Types` directory, you should only see the following two files:

- `CloudFrontClientReturnTypeExtension.php`
- `S3ClientReturnTypeExtension.php`

Additionally, the `vendor/rikudou/aws-sdk-phpstan/extension.neon` should now only include the two above services.

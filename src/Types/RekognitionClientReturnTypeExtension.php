<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RekognitionClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Rekognition\RekognitionClient>
     */
    public function getClass(): string
    {
        return \Aws\Rekognition\RekognitionClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateFaces',
            'compareFaces',
            'copyProjectVersion',
            'createCollection',
            'createDataset',
            'createFaceLivenessSession',
            'createProject',
            'createProjectVersion',
            'createStreamProcessor',
            'createUser',
            'deleteCollection',
            'deleteDataset',
            'deleteFaces',
            'deleteProject',
            'deleteProjectPolicy',
            'deleteProjectVersion',
            'deleteStreamProcessor',
            'deleteUser',
            'describeCollection',
            'describeDataset',
            'describeProjectVersions',
            'describeProjects',
            'describeStreamProcessor',
            'detectCustomLabels',
            'detectFaces',
            'detectLabels',
            'detectModerationLabels',
            'detectProtectiveEquipment',
            'detectText',
            'disassociateFaces',
            'distributeDatasetEntries',
            'getCelebrityInfo',
            'getCelebrityRecognition',
            'getContentModeration',
            'getFaceDetection',
            'getFaceLivenessSessionResults',
            'getFaceSearch',
            'getLabelDetection',
            'getMediaAnalysisJob',
            'getPersonTracking',
            'getSegmentDetection',
            'getTextDetection',
            'indexFaces',
            'listCollections',
            'listDatasetEntries',
            'listDatasetLabels',
            'listFaces',
            'listMediaAnalysisJobs',
            'listProjectPolicies',
            'listStreamProcessors',
            'listTagsForResource',
            'listUsers',
            'putProjectPolicy',
            'recognizeCelebrities',
            'searchFaces',
            'searchFacesByImage',
            'searchUsers',
            'searchUsersByImage',
            'startCelebrityRecognition',
            'startContentModeration',
            'startFaceDetection',
            'startFaceSearch',
            'startLabelDetection',
            'startMediaAnalysisJob',
            'startPersonTracking',
            'startProjectVersion',
            'startSegmentDetection',
            'startStreamProcessor',
            'startTextDetection',
            'stopProjectVersion',
            'stopStreamProcessor',
            'tagResource',
            'untagResource',
            'updateDatasetEntries',
            'updateStreamProcessor',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateFaces' => $this->associateFaces(),
            'compareFaces' => $this->compareFaces(),
            'copyProjectVersion' => $this->copyProjectVersion(),
            'createCollection' => $this->createCollection(),
            'createDataset' => $this->createDataset(),
            'createFaceLivenessSession' => $this->createFaceLivenessSession(),
            'createProject' => $this->createProject(),
            'createProjectVersion' => $this->createProjectVersion(),
            'createStreamProcessor' => $this->createStreamProcessor(),
            'createUser' => $this->createUser(),
            'deleteCollection' => $this->deleteCollection(),
            'deleteDataset' => $this->deleteDataset(),
            'deleteFaces' => $this->deleteFaces(),
            'deleteProject' => $this->deleteProject(),
            'deleteProjectPolicy' => $this->deleteProjectPolicy(),
            'deleteProjectVersion' => $this->deleteProjectVersion(),
            'deleteStreamProcessor' => $this->deleteStreamProcessor(),
            'deleteUser' => $this->deleteUser(),
            'describeCollection' => $this->describeCollection(),
            'describeDataset' => $this->describeDataset(),
            'describeProjectVersions' => $this->describeProjectVersions(),
            'describeProjects' => $this->describeProjects(),
            'describeStreamProcessor' => $this->describeStreamProcessor(),
            'detectCustomLabels' => $this->detectCustomLabels(),
            'detectFaces' => $this->detectFaces(),
            'detectLabels' => $this->detectLabels(),
            'detectModerationLabels' => $this->detectModerationLabels(),
            'detectProtectiveEquipment' => $this->detectProtectiveEquipment(),
            'detectText' => $this->detectText(),
            'disassociateFaces' => $this->disassociateFaces(),
            'distributeDatasetEntries' => $this->distributeDatasetEntries(),
            'getCelebrityInfo' => $this->getCelebrityInfo(),
            'getCelebrityRecognition' => $this->getCelebrityRecognition(),
            'getContentModeration' => $this->getContentModeration(),
            'getFaceDetection' => $this->getFaceDetection(),
            'getFaceLivenessSessionResults' => $this->getFaceLivenessSessionResults(),
            'getFaceSearch' => $this->getFaceSearch(),
            'getLabelDetection' => $this->getLabelDetection(),
            'getMediaAnalysisJob' => $this->getMediaAnalysisJob(),
            'getPersonTracking' => $this->getPersonTracking(),
            'getSegmentDetection' => $this->getSegmentDetection(),
            'getTextDetection' => $this->getTextDetection(),
            'indexFaces' => $this->indexFaces(),
            'listCollections' => $this->listCollections(),
            'listDatasetEntries' => $this->listDatasetEntries(),
            'listDatasetLabels' => $this->listDatasetLabels(),
            'listFaces' => $this->listFaces(),
            'listMediaAnalysisJobs' => $this->listMediaAnalysisJobs(),
            'listProjectPolicies' => $this->listProjectPolicies(),
            'listStreamProcessors' => $this->listStreamProcessors(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listUsers' => $this->listUsers(),
            'putProjectPolicy' => $this->putProjectPolicy(),
            'recognizeCelebrities' => $this->recognizeCelebrities(),
            'searchFaces' => $this->searchFaces(),
            'searchFacesByImage' => $this->searchFacesByImage(),
            'searchUsers' => $this->searchUsers(),
            'searchUsersByImage' => $this->searchUsersByImage(),
            'startCelebrityRecognition' => $this->startCelebrityRecognition(),
            'startContentModeration' => $this->startContentModeration(),
            'startFaceDetection' => $this->startFaceDetection(),
            'startFaceSearch' => $this->startFaceSearch(),
            'startLabelDetection' => $this->startLabelDetection(),
            'startMediaAnalysisJob' => $this->startMediaAnalysisJob(),
            'startPersonTracking' => $this->startPersonTracking(),
            'startProjectVersion' => $this->startProjectVersion(),
            'startSegmentDetection' => $this->startSegmentDetection(),
            'startStreamProcessor' => $this->startStreamProcessor(),
            'startTextDetection' => $this->startTextDetection(),
            'stopProjectVersion' => $this->stopProjectVersion(),
            'stopStreamProcessor' => $this->stopStreamProcessor(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDatasetEntries' => $this->updateDatasetEntries(),
            'updateStreamProcessor' => $this->updateStreamProcessor(),
        };
    }
    private function associateFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociatedFaces'),
                new \PHPStan\Type\Constant\ConstantStringType('UnsuccessfulFaceAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reasons'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FACE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED_TO_A_DIFFERENT_USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_MATCH_CONFIDENCE'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                ]),
            ]),
        ]);
    }
    private function compareFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SourceImageFace'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceMatches'),
                new \PHPStan\Type\Constant\ConstantStringType('UnmatchedFaces'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceImageOrientationCorrection'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetImageOrientationCorrection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Similarity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Face'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('X'),
                        new \PHPStan\Type\Constant\ConstantStringType('Y'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('nose'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                            new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                        new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_90'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_180'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_270'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_90'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_180'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_270'),
                ]),
            ]),
        ]);
    }
    private function copyProjectVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('CollectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFaceLivenessSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProjectVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStreamProcessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamProcessorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletedFaces'),
                new \PHPStan\Type\Constant\ConstantStringType('UnsuccessfulFaceDeletions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reasons'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED_TO_AN_EXISTING_USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FACE_NOT_FOUND'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
            ]),
        ]);
    }
    private function deleteProjectPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProjectVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
            ]),
        ]);
    }
    private function deleteStreamProcessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FaceCount'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('CollectionARN'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UserCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetStats'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LabeledEntries'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalEntries'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorEntries'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeProjectVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectVersionDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillableTrainingTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingEndTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingDataResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('TestingDataResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceProjectVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Feature'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaseModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeatureConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Input'),
                        new \PHPStan\Type\Constant\ConstantStringType('Output'),
                        new \PHPStan\Type\Constant\ConstantStringType('Validation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroundTruthManifest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroundTruthManifest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroundTruthManifest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Input'),
                        new \PHPStan\Type\Constant\ConstantStringType('Output'),
                        new \PHPStan\Type\Constant\ConstantStringType('Validation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoCreate'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroundTruthManifest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoCreate'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroundTruthManifest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroundTruthManifest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTENT_MODERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_LABELS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContentModeration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfidenceThreshold'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Datasets'),
                    new \PHPStan\Type\Constant\ConstantStringType('Feature'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoUpdate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessageCode'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTENT_MODERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_LABELS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStreamProcessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamProcessorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Input'),
                new \PHPStan\Type\Constant\ConstantStringType('Output'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                new \PHPStan\Type\Constant\ConstantStringType('NotificationChannel'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegionsOfInterest'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSharingPreference'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStream'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceSearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedHome'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CollectionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaceMatchThreshold'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinConfidence'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SNSTopicArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('X'),
                        new \PHPStan\Type\Constant\ConstantStringType('Y'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OptIn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function detectCustomLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomLabels'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FaceDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('OrientationCorrection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                    new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                    new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                    new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                    new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Male'),
                            new \PHPStan\Type\Constant\ConstantStringType('Female'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('X'),
                        new \PHPStan\Type\Constant\ConstantStringType('Y'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('nose'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                            new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                        new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_90'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_180'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_270'),
                ]),
            ]),
        ]);
    }
    private function detectLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                new \PHPStan\Type\Constant\ConstantStringType('OrientationCorrection'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parents'),
                    new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('DominantColors'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                            new \PHPStan\Type\Constant\ConstantStringType('HexCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSSColor'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimplifiedColor'),
                            new \PHPStan\Type\Constant\ConstantStringType('PixelPercent'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_90'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_180'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_270'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                    new \PHPStan\Type\Constant\ConstantStringType('DominantColors'),
                    new \PHPStan\Type\Constant\ConstantStringType('Foreground'),
                    new \PHPStan\Type\Constant\ConstantStringType('Background'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        new \PHPStan\Type\Constant\ConstantStringType('Contrast'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Red'),
                        new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Green'),
                        new \PHPStan\Type\Constant\ConstantStringType('HexCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CSSColor'),
                        new \PHPStan\Type\Constant\ConstantStringType('SimplifiedColor'),
                        new \PHPStan\Type\Constant\ConstantStringType('PixelPercent'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('DominantColors'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Contrast'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                            new \PHPStan\Type\Constant\ConstantStringType('HexCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSSColor'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimplifiedColor'),
                            new \PHPStan\Type\Constant\ConstantStringType('PixelPercent'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('DominantColors'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Contrast'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                            new \PHPStan\Type\Constant\ConstantStringType('HexCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSSColor'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimplifiedColor'),
                            new \PHPStan\Type\Constant\ConstantStringType('PixelPercent'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectModerationLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModerationLabels'),
                new \PHPStan\Type\Constant\ConstantStringType('ModerationModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('HumanLoopActivationOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('ProjectVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentTypes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaxonomyLevel'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HumanLoopArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HumanLoopActivationReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('HumanLoopActivationConditionsEvaluationResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function detectProtectiveEquipment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectiveEquipmentModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Persons'),
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BodyParts'),
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('EquipmentDetections'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEFT_HAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('RIGHT_HAND'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('CoversBodyPart'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FACE_COVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('HAND_COVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEAD_COVER'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PersonsWithRequiredEquipment'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonsWithoutRequiredEquipment'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonsIndeterminate'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function detectText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TextDetections'),
                new \PHPStan\Type\Constant\ConstantStringType('TextModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DetectedText'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DisassociatedFaces'),
                new \PHPStan\Type\Constant\ConstantStringType('UnsuccessfulFaceDisassociations'),
                new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reasons'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FACE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED_TO_A_DIFFERENT_USER'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                ]),
            ]),
        ]);
    }
    private function distributeDatasetEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getCelebrityInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Urls'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('KnownGender'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Male'),
                        new \PHPStan\Type\Constant\ConstantStringType('Female'),
                        new \PHPStan\Type\Constant\ConstantStringType('Nonbinary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCelebrityRecognition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Celebrities'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Celebrity'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Urls'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Face'),
                        new \PHPStan\Type\Constant\ConstantStringType('KnownGender'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                            new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                            new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                            new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                            new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                new \PHPStan\Type\Constant\ConstantStringType('High'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Female'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('X'),
                                new \PHPStan\Type\Constant\ConstantStringType('Y'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                    new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                    new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                                new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                new \PHPStan\Type\Constant\ConstantStringType('Female'),
                                new \PHPStan\Type\Constant\ConstantStringType('Nonbinary'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getContentModeration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('ModerationLabels'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModerationModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
                new \PHPStan\Type\Constant\ConstantStringType('GetRequestMetadata'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModerationLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestampMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTimestampMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentTypes'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaxonomyLevel'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SortBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('AggregateBy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFaceDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Faces'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Face'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                        new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                new \PHPStan\Type\Constant\ConstantStringType('Female'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFaceLivenessSessionResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                new \PHPStan\Type\Constant\ConstantStringType('ReferenceImage'),
                new \PHPStan\Type\Constant\ConstantStringType('AuditImages'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFaceSearch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Persons'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Person'),
                    new \PHPStan\Type\Constant\ConstantStringType('FaceMatches'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Index'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Face'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                            new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                            new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                            new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                            new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                new \PHPStan\Type\Constant\ConstantStringType('High'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Female'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('X'),
                                new \PHPStan\Type\Constant\ConstantStringType('Y'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                    new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                    new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                                new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Similarity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Face'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExternalImageId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexFacesModelVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLabelDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
                new \PHPStan\Type\Constant\ConstantStringType('GetRequestMetadata'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestampMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTimestampMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parents'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('DominantColors'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                new \PHPStan\Type\Constant\ConstantStringType('HexCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('CSSColor'),
                                new \PHPStan\Type\Constant\ConstantStringType('SimplifiedColor'),
                                new \PHPStan\Type\Constant\ConstantStringType('PixelPercent'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SortBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('AggregateBy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMediaAnalysisJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationsConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Input'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DetectModerationLabels'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinConfidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectVersion'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_S3_OBJECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_MANIFEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_OUTPUT_CONFIG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_KMS_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Moderation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPersonTracking(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Persons'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Person'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Index'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Face'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                            new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                            new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                            new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                            new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                            new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                new \PHPStan\Type\Constant\ConstantStringType('High'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Female'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('X'),
                                new \PHPStan\Type\Constant\ConstantStringType('Y'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                    new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                    new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                    new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                    new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                                new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSegmentDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('AudioMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                new \PHPStan\Type\Constant\ConstantStringType('SelectedSegmentTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfChannels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestampMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTimestampMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimecodeSMPTE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTimecodeSMPTE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationSMPTE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TechnicalCueSegment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShotSegment'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartFrameNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndFrameNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationFrames'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TECHNICAL_CUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHOT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ColorBars'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndCredits'),
                            new \PHPStan\Type\Constant\ConstantStringType('BlackFrames'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpeningCredits'),
                            new \PHPStan\Type\Constant\ConstantStringType('StudioLogo'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Index'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TECHNICAL_CUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTextDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('TextDetections'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TextModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTag'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColorRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMITED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextDetection'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetectedText'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('X'),
                                new \PHPStan\Type\Constant\ConstantStringType('Y'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function indexFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FaceRecords'),
                new \PHPStan\Type\Constant\ConstantStringType('OrientationCorrection'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('UnindexedFaces'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Face'),
                    new \PHPStan\Type\Constant\ConstantStringType('FaceDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFacesModelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                        new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                new \PHPStan\Type\Constant\ConstantStringType('Female'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_90'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_180'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_270'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Reasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('FaceDetail'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXCEEDS_MAX_FACES'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTREME_POSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_BRIGHTNESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_SHARPNESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL_BOUNDING_BOX'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_FACE_QUALITY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                        new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                new \PHPStan\Type\Constant\ConstantStringType('Female'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listCollections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CollectionIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatasetEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatasetLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetLabelDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LabelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LabelStats'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntryCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBoxCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Faces'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalImageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexFacesModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMediaAnalysisJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MediaAnalysisJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Input'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Results'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetectModerationLabels'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinConfidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProjectVersion'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_S3_OBJECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_OUTPUT_CONFIG'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_KMS_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Moderation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Object'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listProjectPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyRevisionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStreamProcessors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamProcessors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putProjectPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyRevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function recognizeCelebrities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CelebrityFaces'),
                new \PHPStan\Type\Constant\ConstantStringType('UnrecognizedFaces'),
                new \PHPStan\Type\Constant\ConstantStringType('OrientationCorrection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Urls'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Face'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchConfidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('KnownGender'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Male'),
                            new \PHPStan\Type\Constant\ConstantStringType('Female'),
                            new \PHPStan\Type\Constant\ConstantStringType('Nonbinary'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('X'),
                        new \PHPStan\Type\Constant\ConstantStringType('Y'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('nose'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                            new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                            new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                            new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                            new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                            new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                        new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_90'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_180'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATE_270'),
                ]),
            ]),
        ]);
    }
    private function searchFaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SearchedFaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceMatches'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Similarity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Face'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFacesModelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchFacesByImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SearchedFaceBoundingBox'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchedFaceConfidence'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceMatches'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Similarity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Face'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFacesModelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserMatches'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchedFace'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchedUser'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Similarity'),
                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function searchUsersByImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserMatches'),
                new \PHPStan\Type\Constant\ConstantStringType('FaceModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('SearchedFace'),
                new \PHPStan\Type\Constant\ConstantStringType('UnsearchedFaces'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Similarity'),
                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                        new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                new \PHPStan\Type\Constant\ConstantStringType('Female'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FaceDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reasons'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('Smile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Eyeglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sunglasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                        new \PHPStan\Type\Constant\ConstantStringType('Beard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mustache'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyesOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('MouthOpen'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emotions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pose'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('FaceOccluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('EyeDirection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Male'),
                                new \PHPStan\Type\Constant\ConstantStringType('Female'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HAPPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANGRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISGUSTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SURPRISED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALM'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEAR'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('eyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('eyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('nose'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeBrowUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightEyeDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('noseRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthUp'),
                                new \PHPStan\Type\Constant\ConstantStringType('mouthDown'),
                                new \PHPStan\Type\Constant\ConstantStringType('leftPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('rightPupil'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineLeft'),
                                new \PHPStan\Type\Constant\ConstantStringType('chinBottom'),
                                new \PHPStan\Type\Constant\ConstantStringType('midJawlineRight'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperJawlineRight'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Roll'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Brightness'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sharpness'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Yaw'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pitch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FACE_NOT_LARGEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXCEEDS_MAX_FACES'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTREME_POSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_BRIGHTNESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_SHARPNESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL_BOUNDING_BOX'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW_FACE_QUALITY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startCelebrityRecognition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startContentModeration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startFaceDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startFaceSearch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startLabelDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startMediaAnalysisJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startPersonTracking(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startProjectVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
            ]),
        ]);
    }
    private function startSegmentDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startStreamProcessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTextDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopProjectVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
            ]),
        ]);
    }
    private function stopStreamProcessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDatasetEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateStreamProcessor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}
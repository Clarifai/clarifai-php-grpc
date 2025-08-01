<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status_code.proto

namespace GPBMetadata\Proto\Clarifai\Api\Status;

class StatusCode
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�e
+proto/clarifai/api/status/status_code.protoclarifai.api.status*�c

StatusCode
ZERO 
SUCCESS�N
MIXED_STATUS�N
FAILURE�N
	TRY_AGAIN�N
NOT_IMPLEMENTED�N

MOVED�N
TEAPOT�N
ACCEPTED�N
CONN_ACCOUNT_ISSUES�U
CONN_TOKEN_INVALID�U
CONN_CREDENTIALS_INVALID�U
CONN_EXCEED_HOURLY_LIMIT�U
CONN_EXCEED_MONTHLY_LIMIT�U
CONN_THROTTLED�U
CONN_EXCEEDS_LIMITS�U
CONN_INSUFFICIENT_SCOPES�U
CONN_KEY_INVALID�V
CONN_KEY_NOT_FOUND�V
CONN_BAD_REQUEST_FORMAT�V
CONN_DOES_NOT_EXIST�V
CONN_INVALID_REQUEST�V
CONN_METHOD_NOT_ALLOWED�V
CONN_NO_GDPR_CONSENT�V
CONN_INVALID_RANGE�V
CONN_AUTH_METHOD_DISABLED�W
MODEL_TRAINED�
MODEL_TRAINING��
MODEL_UNTRAINED�
MODEL_QUEUED_FOR_TRAINING�
MODEL_UPLOADING�
MODEL_UPLOADING_FAILED�
MODEL_TRAINING_FAILED�
MODEL_BUILDING�
MODEL_BUILDING_FAILED��"
MODEL_BUILD_UNEXPECTED_ERROR��
MODEL_TRAINING_NO_DATA��!
MODEL_TRAINING_NO_POSITIVES��*
$MODEL_TRAINING_ONE_VS_N_SINGLE_CLASS��
MODEL_TRAINING_TIMED_OUT��"
MODEL_TRAINING_WAITING_ERROR��"
MODEL_TRAINING_UNKNOWN_ERROR��&
MODEL_TRAINING_MSG_REDELIVER��&
 MODEL_TRAINING_INSUFFICIENT_DATA��#
MODEL_TRAINING_INVALID_PARAMS��4
.MODEL_TRAINING_INVALID_DATA_TOLERANCE_EXCEEDED��
MODEL_MODIFY_SUCCESS��
MODEL_MODIFY_PENDING��
MODEL_MODIFY_FAILED��
MODEL_DOES_NOT_EXISTХ
MODEL_PERMISSION_DENIEDѥ
MODEL_INVALID_ARGUMENTҥ
MODEL_INVALID_REQUESTӥ
MODEL_EVALUATED��
MODEL_EVALUATING��
MODEL_NOT_EVALUATED��!
MODEL_QUEUED_FOR_EVALUATION�� 
MODEL_EVALUATION_TIMED_OUT��$
MODEL_EVALUATION_WAITING_ERROR��$
MODEL_EVALUATION_UNKNOWN_ERROR��
MODEL_PREDICTION_FAILED��(
MODEL_EVALUATION_MSG_REDELIVER¦"
MODEL_EVALUATION_NEED_LABELSæ"
MODEL_EVALUATION_NEED_INPUTSĦ
MODEL_EVALUATION_FAILEDŦ
MODEL_DEPLOYMENT_FAILED�
MODEL_DEPLOYING�!
MODEL_QUEUED_FOR_DEPLOYMENT�
MODEL_NOT_DEPLOYED�
MODEL_BUSY_PLEASE_RETRY�
MODEL_LOADING�&
 MODEL_REFERENCE_INVALID_ARGUMENT��*
$MODEL_EXAMPLE_INPUT_INVALID_ARGUMENT��
MODEL_EXPORTED��
MODEL_EXPORTING��
MODEL_EXPORTING_FAILED��
MODEL_EXPORT_PENDING�� 
WORKFLOW_NO_MATCHING_INPUT�$
WORKFLOW_REQUIRE_TRAINED_MODEL�
WORKFLOW_DUPLICATEԬ!
WORKFLOW_UNSUPPORTED_FORMATլ
WORKFLOW_DOES_NOT_EXIST֬ 
WORKFLOW_PERMISSION_DENIED׬
WORKFLOW_INVALID_ARGUMENTج
WORKFLOW_INVALID_RECIPE٬
WORKFLOW_INVALID_TEMPLATEڬ
WORKFLOW_INVALID_GRAPH۬
WORKFLOW_INTERNAL_FAILUREܬ
WORKFLOW_INVALID_REQUEST׳
WORKFLOW_MODIFY_SUCCESS��
WORKFLOW_MODIFY_PENDING��
WORKFLOW_MODIFY_FAILED��
WORKFLOW_REINDEX_FAILED��
CONCEPT_MODIFY_SUCCESS�
CONCEPT_MODIFY_PENDING�
CONCEPT_MODIFY_FAILED�
ANNOTATION_SUCCESSּ
ANNOTATION_PENDING׼
ANNOTATION_FAILEDؼ
ANNOTATION_UNKNOWN_STATUSڼ!
ANNOTATION_INVALID_ARGUMENTۼ"
ANNOTATION_PERMISSION_DENIEDܼ 
ANNOTATION_AWAITING_REVIEWݼ*
$ANNOTATION_AWAITING_CONSENSUS_REVIEW߼
ANNOTATION_REVIEW_DENIED޼
ANNOTATION_MODIFY_SUCCESS��
ANNOTATION_MODIFY_PENDING��
ANNOTATION_MODIFY_FAILED��&
 METADATA_INVALID_PATCH_ARGUMENTS��
METADATA_PARSING_ISSUE��!
METADATA_MANIPULATION_ISSUE��
TRAINER_JOB_STATE_NONE��
TRAINER_JOB_STATE_QUEUED��
TRAINER_JOB_STATE_RUNNING�� 
TRAINER_JOB_STATE_COMPLETE��
TRAINER_JOB_STATE_ERROR��
DATA_DUMP_SUCCESS��
DATA_DUMP_PENDING��
DATA_DUMP_FAILED��
DATA_DUMP_IN_PROGRESS��
DATA_DUMP_NO_DATA�� 
DATA_DUMP_UNEXPECTED_ERROR��
DATA_DUMP_EXPORT_SUCCESS��
DATA_DUMP_EXPORT_PENDING��
DATA_DUMP_EXPORT_FAILED��"
DATA_DUMP_EXPORT_IN_PROGRESS��\'
!DATA_DUMP_EXPORT_UNEXPECTED_ERROR��
APP_DUPLICATION_SUCCESS��
APP_DUPLICATION_FAILED��
APP_DUPLICATION_PENDING��!
APP_DUPLICATION_IN_PROGRESS��%
APP_DUPLICATION_INVALID_REQUEST��
MODULE_DOES_NOT_EXIST��
MODULE_PERMISSION_DENIED��
MODULE_INVALID_ARGUMENT��
MODULE_INVALID_REQUEST��
BULK_OPERATION_SUCCESS��
BULK_OPERATION_FAILED��
BULK_OPERATION_PENDING�� 
BULK_OPERATION_IN_PROGRESS��$
BULK_OPERATION_INVALID_REQUEST��
BULK_OPERATION_CANCELLED��%
BULK_OPERATION_UNEXPECTED_ERROR��
RUNNER_DOES_NOT_EXIST��
RUNNER_PERMISSION_DENIED��
RUNNER_INVALID_ARGUMENT��
RUNNER_INVALID_REQUEST��
RUNNER_NEEDS_RETRY��
RUNNER_STREAM_START��
RUNNER_STREAM_END��
RUNNER_ITEM_CANCELLED��
RUNNER_PROCESSING_FAILED��
NODEPOOL_DOES_NOT_EXIST��
NODEPOOL_INVALID_ARGUMENT��
NODEPOOL_INVALID_REQUEST��$
COMPUTE_CLUSTER_DOES_NOT_EXIST��&
 COMPUTE_CLUSTER_INVALID_ARGUMENT��%
COMPUTE_CLUSTER_INVALID_REQUEST��
DEPLOYMENT_DOES_NOT_EXIST��!
DEPLOYMENT_INVALID_ARGUMENT�� 
DEPLOYMENT_INVALID_REQUEST��"
INSTANCE_TYPE_DOES_NOT_EXIST��$
INSTANCE_TYPE_INVALID_ARGUMENT��#
INSTANCE_TYPE_INVALID_REQUEST��+
%COMPUTE_PLANE_METRICS_INVALID_REQUEST��"
PIPELINE_STEP_DOES_NOT_EXIST��$
PIPELINE_STEP_INVALID_ARGUMENT��#
PIPELINE_STEP_INVALID_REQUEST��
PIPELINE_STEP_UPLOADING��$
PIPELINE_STEP_UPLOADING_FAILED��
PIPELINE_STEP_BUILDING��#
PIPELINE_STEP_BUILDING_FAILED��*
$PIPELINE_STEP_BUILD_UNEXPECTED_ERROR��
PIPELINE_STEP_READY��
PIPELINE_STEP_NOT_READY��
INPUT_SUCCESS��
INPUT_PENDING��
INPUT_FAILED��
INPUT_IN_PROGRESS�� 
INPUT_DOWNLOAD_SUCCESS�� 
INPUT_DOWNLOAD_PENDING��
INPUT_DOWNLOAD_FAILED��$
INPUT_DOWNLOAD_IN_PROGRESS�� 
INPUT_STATUS_UPDATE_FAILED��
INPUT_DELETE_FAILED��
INPUT_DUPLICATE��
INPUT_UNSUPPORTED_FORMAT��
INPUT_DOES_NOT_EXIST��
INPUT_PERMISSION_DENIED��
INPUT_INVALID_ARGUMENT��
INPUT_OVER_LIMIT��
INPUT_INVALID_URL��
INPUT_MODIFY_SUCCESS��
INPUT_MODIFY_PENDING��
INPUT_MODIFY_FAILED��
INPUT_STORAGE_HOST_FAILED��
ALL_INPUT_INVALID_BYTES��
INPUT_CLUSTER_SUCCESS��
INPUT_CLUSTER_PENDING��
INPUT_CLUSTER_FAILED��
INPUT_CLUSTER_IN_PROGRESS��
INPUT_REINDEX_SUCCESS��
INPUT_REINDEX_PENDING��
INPUT_REINDEX_FAILED��
INPUT_REINDEX_IN_PROGRESS��"
INPUT_VIDEO_DOWNLOAD_SUCCESS��"
INPUT_VIDEO_DOWNLOAD_PENDING��!
INPUT_VIDEO_DOWNLOAD_FAILED��
INPUT_VIDEO_DUPLICATE��$
INPUT_VIDEO_UNSUPPORTED_FORMAT�� 
INPUT_VIDEO_DOES_NOT_EXIST��#
INPUT_VIDEO_PERMISSION_DENIED��"
INPUT_VIDEO_INVALID_ARGUMENT��
INPUT_VIDEO_OVER_LIMIT��
INPUT_VIDEO_INVALID_URL�� 
INPUT_VIDEO_MODIFY_SUCCESS�� 
INPUT_VIDEO_MODIFY_PENDING��
INPUT_VIDEO_MODIFY_FAILED��%
INPUT_VIDEO_STORAGE_HOST_FAILED��$
ALL_INPUT_VIDEOS_INVALID_BYTES��$
INPUT_VIDEO_PROCESSING_SUCCESS��$
INPUT_VIDEO_PROCESSING_PENDING��#
INPUT_VIDEO_PROCESSING_FAILED��\'
!INPUT_VIDEO_STORAGE_INCONSISTENCY��!
INPUT_VIDEO_STORAGE_FAILURE��(
"INPUT_VIDEO_URL_GENERATION_FAILURE��
INPUT_CONNECTION_FAILED��&
 REQUEST_DISABLED_FOR_MAINTENANCE��/
%INPUT_WRITES_DISABLED_FOR_MAINTENANCE��
INPUT_INVALID_REQUEST��
PREDICT_INVALID_REQUEST��
SEARCH_INVALID_REQUEST¸
CONCEPTS_INVALID_REQUESTø
STATS_INVALID_REQUESTĸ
DATABASE_DUPLICATE_KEYʸ 
DATABASE_STATEMENT_TIMEOUT˸$
DATABASE_INVALID_ROWS_AFFECTED̸ 
DATABASE_DEADLOCK_DETECTED͸
DATABASE_FAIL_TASKθ&
 DATABASE_FAIL_TO_GET_CONNECTIONSϸ
DATABASE_TOO_MANY_CLIENTSи"
DATABASE_CONSTRAINT_VIOLATEDѸ
DATABASE_CANCELEDո
ASYNC_WORKER_MULTI_ERRORSԸ
RPC_REQUEST_QUEUE_FULL޸
RPC_SERVER_UNAVAILABLE߸
RPC_REQUEST_TIMEOUT�#
RPC_MAX_MESSAGE_SIZE_EXCEEDED�
RPC_CANCELED�
RPC_UNKNOWN_METHOD�
REQUEST_CANCELED_BY_USER�
CLUSTER_INTERNAL_FAILURE��
EXTERNAL_CONNECTION_ERROR�
QUERY_INVALID_SYNTAX�
QUEUE_CONN_ERROR��!
QUEUE_CLOSE_REQUEST_TIMEOUT��
QUEUE_CONN_CLOSED��
QUEUE_PUBLISH_ACK_TIMEOUT��
QUEUE_PUBLISH_ERROR�� 
QUEUE_SUBSCRIPTION_TIMEOUT��
QUEUE_SUBSCRIPTION_ERROR��
QUEUE_MARSHALLING_FAILED�� 
QUEUE_UNMARSHALLING_FAILED��\'
!QUEUE_MAX_MSG_REDELIVERY_EXCEEDED��
QUEUE_ACK_FAILURE��
SQS_OVERLIMIT�� 
SQS_INVALID_RECEIPT_HANDLE��
SQS_UNKNOWN��
SEARCH_INTERNAL_FAILURE��
SEARCH_PROJECTION_FAILURE��
SEARCH_PREDICTION_FAILURE��\'
!SEARCH_BY_NOT_FULLY_INDEXED_INPUT�� 
SAVED_SEARCH_MODIFY_FAILED��
SEARCH_COUNTS_UNAVAILABLE��
EVALUATION_QUEUED��
EVALUATION_IN_PROGRESS��
EVALUATION_SUCCESS��(
"EVALUATION_FAILED_TO_RETRIEVE_DATA��!
EVALUATION_INVALID_ARGUMENT��
EVALUATION_FAILED��
EVALUATION_PENDING��
EVALUATION_TIMED_OUT��!
EVALUATION_UNEXPECTED_ERROR��
EVALUATION_MIXED��
STRIPE_EVENT_ERROR��

CACHE_MISS��&
 REDIS_SCRIPT_EXITED_WITH_FAILURE��
REDIS_STREAM_ERR��
REDIS_NO_CONSUMERS��
REDIS_STREAM_BACKOFF��
SIGNUP_EVENT_ERROR��
SIGNUP_FLAGGED��
FILETYPE_UNSUPPORTED��
APP_COUNT_INVALID_MESSAGE��\'
!APP_COUNT_UPDATE_INCREMENT_FAILED��
APP_COUNT_REBUILD_FAILED�� 
APP_COUNT_INTERNAL_FAILURE��
MP_DOWNLOAD_ERROR��
MP_RESOLVE_DNS_ERROR��)
#MP_DOWNLOAD_MAX_SIZE_EXCEEDED_ERROR��
MP_IMAGE_DECODE_ERROR��
MP_INVALID_ARGUMENT��
MP_IMAGE_PROCESSING_ERROR��
DATATIER_CONN_ERROR��
USER_CONSENT_FACEц
WORKER_MISSING��
WORKER_ACTIVE��
WORKER_INACTIVE��
COLLECTOR_MISSING��
COLLECTOR_ACTIVE��
COLLECTOR_INACTIVE��!
COLLECTOR_POST_INPUT_FAILED��*
$SSO_IDENTITY_PROVIDER_DOES_NOT_EXIST��
TASK_IN_PROGRESS�
	TASK_DONE�
TASK_WONT_DO�
TASK_FAILED��
	TASK_IDLE��
TASK_CONFLICTԦ
TASK_NOT_IMPLEMENTEDզ
TASK_MISSING֦
TASK_PERMISSION_DENIEDצ
TASK_ASSIGNMENT_SUCCESS��
TASK_ASSIGNMENT_PENDING��%
TASK_ASSIGNMENT_AWAITING_REVIEW��/
)TASK_ASSIGNMENT_AWAITING_CONSENSUS_REVIEW��
TASK_ASSIGNMENT_REJECTED��$
TASK_ASSIGNMENT_REVIEW_SUCCESS��$
TASK_ASSIGNMENT_REVIEW_PENDING��&
 TASK_ASSIGNMENT_REVIEW_DISMISSED��
LABEL_ORDER_PENDING٭
LABEL_ORDER_IN_PROGRESSڭ
LABEL_ORDER_SUCCESSۭ
LABEL_ORDER_CANCELEDܭ
LICENSE_ACTIVE��
LICENSE_DOES_NOT_EXIST��
LICENSE_NEED_UPDATE��
LICENSE_EXPIRED��
LICENSE_REVOKED��
LICENSE_DELETED��
LICENSE_VOLUME_EXCEEDED��!
PASSWORD_VALIDATION_SUCCESS�� 
PASSWORD_VALIDATION_FAILED��%
PASSWORDPOLICY_INVALID_ARGUMENT��"
FEATUREFLAG_CONFIG_NOT_FOUND��"
FEATUREFLAG_INVALID_ARGUMENT��
FEATUREFLAG_BLOCKED��
FEATUREFLAG_NOT_FOUND��
MAINTENANCE_SUCCESS��
MAINTENANCE_FAILED��
DATASET_VERSION_PENDING��!
DATASET_VERSION_IN_PROGRESS��
DATASET_VERSION_READY��
DATASET_VERSION_FAILURE��&
 DATASET_VERSION_UNEXPECTED_ERROR��
DATASET_VERSION_CONFLICT��
DATASET_INPUT_SUCCESS��
DATASET_INPUT_DUPLICATE��$
DATASET_VERSION_EXPORT_SUCCESS��$
DATASET_VERSION_EXPORT_PENDING��#
DATASET_VERSION_EXPORT_FAILED��(
"DATASET_VERSION_EXPORT_IN_PROGRESS��-
\'DATASET_VERSION_EXPORT_UNEXPECTED_ERROR��

JOB_QUEUED��
JOB_RUNNING��
JOB_COMPLETED��

JOB_FAILED��
JOB_CANCELLED��
JOB_UNEXPECTED_ERROR��
JOB_CONFLICT��
AUTH_MISSING_IDP_ASSOC��
LIST_OBJECTS_FAILEDЃ
ARCHIVE_EXTRACT_FAILED��
UPLOAD_IN_PROGRESS��
UPLOAD_DONE��
UPLOAD_FAILED��
UPLOAD_UNEXPECTED_ERROR��
UPLOAD_EXPIRED��
UPLOAD_CANCELED��
UPLOAD_CONFLICT��
BILLING_INVALID_INFO��
BILLING_MISSING_TOKENS��!
LOG_ENTRIES_INVALID_REQUEST�
INTERNAL_SERVER_ISSUE��
INTERNAL_FETCHING_ISSUE��
INTERNAL_DATABASE_ISSUE��
INTERNAL_CONTEXT_CANCELED��!
INTERNAL_UNEXPECTED_TIMEOUT��
INTERNAL_UNEXPECTED_V1��
INTERNAL_UNEXPECTED_PANIC��
INTERNAL_UNEXPECTED_SPIRE�� 
INTERNAL_REDIS_UNAVAILABLE��!
INTERNAL_RESOURCE_EXHAUSTED��"
INTERNAL_REDIS_UNCATEGORIZED�� 
INTERNAL_AWS_UNCATEGORIZED��"
INTERNAL_AZURE_UNCATEGORIZED��%
INTERNAL_VECTORDB_UNCATEGORIZED��#
INTERNAL_ORACLE_UNCATEGORIZED��"
INTERNAL_VULTR_UNCATEGORIZED�� 
INTERNAL_GCP_UNCATEGORIZED��
CONN_UNCATEGORIZED��
MODEL_UNCATEGORIZED��
INPUT_UNCATEGORIZED��
ANNOTATION_UNCATEGORIZED��
BILLING_UNCATEGORIZED��
INTERNAL_UNCATEGORIZED��
BAD_REQUEST��
SERVER_ERROR��"����"��"��"��"̂̂"͂͂"΂΂"ςς"ЂЂ"тт"҂҂"����"����"����"����"����"ҸҸ"ӸӸ"����"����"����"����"����"����"����"����"����"����"����Bg
com.clarifai.grpc.api.statusPZ>github.com/Clarifai/clarifai-go-grpc/proto/clarifai/api/status�CAIPbproto3'
        , true);

        static::$is_initialized = true;
    }
}


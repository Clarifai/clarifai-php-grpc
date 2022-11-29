<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/auth/scope/scope.proto

namespace GPBMetadata\Proto\Clarifai\Auth\Scope;

class Scope
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
%proto/clarifai/auth/scope/scope.protoclarifai.auth.scope google/protobuf/descriptor.proto"F
	ScopeList&
scopes (2.clarifai.auth.scope.S
	endpoints (	*�
S	
undef 
All�\'
Predict�\'
Predict_Feedback�\' 

Inputs_Add�\'��\'

Inputs_Get�\' 
Inputs_Patch�\'��\'��\'
Inputs_Delete�\'��\'��\'
Outputs_Patch	
��\'��\'
Concepts_Add
�\'��\'
Concepts_Get�\'"
Concepts_Patch�\'��\'
��\'
Concepts_Delete��\'
��\'

Models_Add�\'��\'

Models_Get�\'$
Models_Patch�\'��\'��\'��\'
Models_Delete�\'��\'��\'
Models_Train�\'��\'
Models_Sync��\'
Workflows_Add�\'��\'
Workflows_Get�\'#
Workflows_Patch�\'��\'��\'"
Workflows_Delete�\'��\'��\'
WorkflowMetrics_Get`�\'!
WorkflowMetrics_Adda�\'��\'`(
WorkflowMetrics_Deleteb�\'��\'a��\'`"
TSNEVisualizations_Add��\'
TSNEVisualizations_Get
Annotations_Add%�\'��\'&
Annotations_Get&�\'%
Annotations_Patch\'�\'��\'%��\'&$
Annotations_Delete(�\'��\'%��\'&
Collectors_Add)�\'��\'*
Collectors_Get*�\'#
Collectors_Delete+�\'��\')��\'*
Apps_Add,�\'��\'-
Apps_Get-�\'
Apps_Delete.�\'��\',��\'-
Keys_Add/�\'��\'0
Keys_Get0�\'
Keys_Delete1�\'��\'/��\'0
Collaborators_Add3�\'��\'2
Collaborators_Get2�\'&
Collaborators_Delete4�\'��\'3��\'2
Metrics_Add6�\'��\'5
Metrics_Get5�\' 
Metrics_Delete?�\'��\'6��\'5
	Tasks_Add7�\'��\'8
	Tasks_Get8�\'
Tasks_DeleteF�\'��\'7��\'8"
PasswordPolicies_Add9�\'��\':
PasswordPolicies_Get:�\')
PasswordPolicies_Delete;�\'��\'9��\':!
PasswordHistory_Add<�\' ��\'=
PasswordHistory_Get=�\' (
PasswordHistory_Delete>�\' ��\'<��\'=
Notifications_Get@�\' 
Notifications_AddA�\' ��\'@&
Notifications_DeleteB�\' ��\'A��\'@
LabelOrders_GetC�\'
LabelOrders_AddD�\'��\'C$
LabelOrders_DeleteE�\'��\'D��\'C 
UserFeatureConfigs_GetG�\'$
UserFeatureConfigs_AddH�\' ��\'G+
UserFeatureConfigs_DeleteI�\' ��\'H��\'G
	Teams_GetJ�\' 
	Teams_AddK�\' ��\'J
Teams_DeleteL�\' ��\'J��\'K
TeamUsers_GetM�\' 
TeamUsers_AddN�\' ��\'M"
TeamUsers_DeleteO�\' ��\'M��\'N
TeamApps_GetS�\' 
TeamApps_AddT�\' ��\'S!
TeamApps_DeleteU�\' ��\'S��\'T
	Roles_GetP�\' 
Organizations_GetV�\' 
Organizations_AddW�\' ��\'V&
Organizations_DeleteX�\' ��\'V��\'W
IdentityProviders_GetY�\' #
IdentityProviders_AddZ�\' ��\'Y*
IdentityProviders_Delete[�\' ��\'Y��\'Z
Org_ListAllApps\\�\' $
OrganizationMembers_Delete]�\' !
OrganizationMembers_Add^�\' "
OrganizationMembers_Listc�\' 
UserOrganizations_Get_�\' %
OrganizationInvitations_Addd�\' %
OrganizationInvitations_Gete�\' .
 FindDuplicateAnnotationsJobs_Addf�\'��\'g*
 FindDuplicateAnnotationsJobs_Getg�\'5
#FindDuplicateAnnotationsJobs_Deleteh�\'��\'f��\'g
Datasets_Geti�\'
Datasets_Addj�\'��\'i!
Datasets_Deletek�\'��\'i��\'j
Modules_Addl�\'��\'m
Modules_Getm�\' 
Modules_Deleten�\'��\'l��\'m-
InstalledModuleVersions_Addo�\'��\'p��\'m)
InstalledModuleVersions_Getp�\'��\'m4
InstalledModuleVersions_Deleteq�\'��\'o��\'p��\'m
Search�\'
Search_Feedback�\' 
SavedSearch_Getr�\'
SavedSearch_Adds�\'��\'r$
SavedSearch_Deletet�\'��\'r��\'s&
ModelVersionPublications_Addu�\')
ModelVersionPublications_Deletev�\'"
WorkflowPublications_Addw�\'%
WorkflowPublications_Deletex�\'
BulkOperation_Addy�\'��\'z
BulkOperation_Getz�\'&
BulkOperation_Delete{�\'��\'y��\'z
HistoricalUsage_Get|
Uploads_Get��\'
Uploads_Add�	�\'��\'�#
Uploads_Delete��\'��\'���\'�"""  "!!""""}}"~~B<
com.clarifai.grpc.auth.scopePZclarifai/auth/scope�CAIPbproto3'
        , true);

        static::$is_initialized = true;
    }
}


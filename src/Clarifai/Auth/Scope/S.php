<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/auth/scope/scope.proto

namespace Clarifai\Auth\Scope;

use UnexpectedValueException;

/**
 * Next index: 41
 * NOTE: When updating the list of "clarifai_exposed" scopes, please also
 * update the TestScopes function in main_key_test.go and TestGetExposedScopes function in
 * scope_test.go
 * The dependencies listed for each scope are simply recommendations so that a user
 * cannot make a key that would be useless. Beyond the key creation they are not enforced
 * but rather the scopes are enforce when data is accessed.
 * There is the following conventions in place, make sure you add them to the scopes for all new
 * resource types:
 * 1. *_Add requires the corresponding _Get.
 * 2. *_Delete requires the corresponding _Add and _Get.
 * 3. *_Patch is deprecated and not check anywhere.
 * Think of the dependencies in this file at the DB level. If you cannot make a DB call to Get, Add
 * or Delete a resource without having access to another resource then you should add it here. That
 * should for the most part be the same resource type. In service.proto for the API level you will
 * also specify cl_depending_scopes for each API endpoint. Those cover cases where an endpoint
 * might need to access more than just that one resource type in order to operate (ie. API handlers
 * that make multiple DB calls of various resource types likely have more cl_depending_scopes than
 * the ones listed below). For example: PostCollectors to create a collector we make sure that you
 * can do model predictions, get concepts, etc. so that you don't have a collector that would be
 * useless at the end of that API handler but below you can see that the dependencies of Collector
 * scopes are only on other Collector scopes.
 *
 * Protobuf type <code>clarifai.auth.scope.S</code>
 */
class S
{
    /**
     * introduce undef so that the zero (default/unset) value of the enum is not a real
     * permission.  undef is only present for this purpose and should not be used
     * to indicate any "real" value.
     *
     * Generated from protobuf enum <code>undef = 0;</code>
     */
    const undef = 0;
    /**
     * Generated from protobuf enum <code>All = 1 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const All = 1;
    /**
     * Make an rpc to our prediction services.
     *
     * Generated from protobuf enum <code>Predict = 2 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Predict = 2;
    /**
     * Write to the inputs table in the DB.
     *
     * Generated from protobuf enum <code>Inputs_Add = 4 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Inputs_Get];</code>
     */
    const Inputs_Add = 4;
    /**
     * Read from the inputs table in the DB.
     *
     * Generated from protobuf enum <code>Inputs_Get = 5 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Inputs_Get = 5;
    /**
     * To patch we need read/write.
     * Deprecated.
     * Optionally needs Concepts_Add.
     *
     * Generated from protobuf enum <code>Inputs_Patch = 7 [deprecated = true, (.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Inputs_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Inputs_Get];</code>
     */
    const Inputs_Patch = 7;
    /**
     * To delete we need read/write
     *
     * Generated from protobuf enum <code>Inputs_Delete = 8 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Inputs_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Inputs_Get];</code>
     */
    const Inputs_Delete = 8;
    /**
     * Deprecated.
     *
     * Generated from protobuf enum <code>Outputs_Patch = 9 [deprecated = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Inputs_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Predict];</code>
     */
    const Outputs_Patch = 9;
    /**
     * Write to the concepts DB tables.
     *
     * Generated from protobuf enum <code>Concepts_Add = 10 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Concepts_Get];</code>
     */
    const Concepts_Add = 10;
    /**
     * Read from the concepts DB tables.
     *
     * Generated from protobuf enum <code>Concepts_Get = 11 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Concepts_Get = 11;
    /**
     * To patch we need read/write.
     * Deprecated
     *
     * Generated from protobuf enum <code>Concepts_Patch = 12 [deprecated = true, (.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Concepts_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Concepts_Get];</code>
     */
    const Concepts_Patch = 12;
    /**
     * To delete we need read/write.
     * Note: not implemented.
     *
     * Generated from protobuf enum <code>Concepts_Delete = 13 [(.clarifai.auth.scope.clarifai_depending_scopes) = Concepts_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Concepts_Get];</code>
     */
    const Concepts_Delete = 13;
    /**
     * Write to the models DB tables.
     *
     * Generated from protobuf enum <code>Models_Add = 14 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Get];</code>
     */
    const Models_Add = 14;
    /**
     * Read from the models and models versions DB tables.
     *
     * Generated from protobuf enum <code>Models_Get = 15 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Models_Get = 15;
    /**
     * To patch we need read/write.
     * Deprecated.
     *
     * Generated from protobuf enum <code>Models_Patch = 16 [deprecated = true, (.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Train];</code>
     */
    const Models_Patch = 16;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Models_Delete = 17 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Get];</code>
     */
    const Models_Delete = 17;
    /**
     * Note: Models_Train is effectively doing POST /models/{models_id}/versions so it's treated that
     * way in terms of data access under the hood.
     * Write to the model versions DB table.
     *
     * Generated from protobuf enum <code>Models_Train = 26 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Get];</code>
     */
    const Models_Train = 26;
    /**
     * Internal only model syncing.
     *
     * Generated from protobuf enum <code>Models_Sync = 27 [(.clarifai.auth.scope.clarifai_depending_scopes) = Models_Get];</code>
     */
    const Models_Sync = 27;
    /**
     * To get model version export
     *
     * Generated from protobuf enum <code>ModelExports_Get = 142 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const ModelExports_Get = 142;
    /**
     * To create model version export
     *
     * Generated from protobuf enum <code>ModelExports_Add = 143 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = ModelExports_Get];</code>
     */
    const ModelExports_Add = 143;
    /**
     * To pull the model version's image
     *
     * Generated from protobuf enum <code>Models_Pull = 150 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Models_Get];</code>
     */
    const Models_Pull = 150;
    /**
     * Write to the workflows DB table.
     *
     * Generated from protobuf enum <code>Workflows_Add = 18 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Workflows_Get];</code>
     */
    const Workflows_Add = 18;
    /**
     * Read from the workflows DB table.
     *
     * Generated from protobuf enum <code>Workflows_Get = 19 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Workflows_Get = 19;
    /**
     * To patch we need read/write.
     * Deprecated.
     *
     * Generated from protobuf enum <code>Workflows_Patch = 20 [deprecated = true, (.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Workflows_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Workflows_Get];</code>
     */
    const Workflows_Patch = 20;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Workflows_Delete = 21 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Workflows_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Workflows_Get];</code>
     */
    const Workflows_Delete = 21;
    /**
     * Generated from protobuf enum <code>WorkflowMetrics_Get = 96 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const WorkflowMetrics_Get = 96;
    /**
     * Generated from protobuf enum <code>WorkflowMetrics_Add = 97 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = WorkflowMetrics_Get];</code>
     */
    const WorkflowMetrics_Add = 97;
    /**
     * Generated from protobuf enum <code>WorkflowMetrics_Delete = 98 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = WorkflowMetrics_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = WorkflowMetrics_Get];</code>
     */
    const WorkflowMetrics_Delete = 98;
    /**
     * Write to the visualizations DB table.
     * Deprecated
     *
     * Generated from protobuf enum <code>TSNEVisualizations_Add = 24 [deprecated = true, (.clarifai.auth.scope.clarifai_depending_scopes) = TSNEVisualizations_Get];</code>
     */
    const TSNEVisualizations_Add = 24;
    /**
     * Read from the visualizations DB table.
     * Deprecated
     *
     * Generated from protobuf enum <code>TSNEVisualizations_Get = 25 [deprecated = true];</code>
     */
    const TSNEVisualizations_Get = 25;
    /**
     * Write to the annotations DB table.
     *
     * Generated from protobuf enum <code>Annotations_Add = 37 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Annotations_Get];</code>
     */
    const Annotations_Add = 37;
    /**
     * Read from the annotations DB table.
     *
     * Generated from protobuf enum <code>Annotations_Get = 38 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Annotations_Get = 38;
    /**
     * To patch we need read/write.
     * Deprecated.
     *
     * Generated from protobuf enum <code>Annotations_Patch = 39 [deprecated = true, (.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Annotations_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Annotations_Get];</code>
     */
    const Annotations_Patch = 39;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Annotations_Delete = 40 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Annotations_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Annotations_Get];</code>
     */
    const Annotations_Delete = 40;
    /**
     * Write to the collectors DB table.
     *
     * Generated from protobuf enum <code>Collectors_Add = 41 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Collectors_Get];</code>
     */
    const Collectors_Add = 41;
    /**
     * Read from the collectors DB table.
     *
     * Generated from protobuf enum <code>Collectors_Get = 42 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Collectors_Get = 42;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Collectors_Delete = 43 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Collectors_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Collectors_Get];</code>
     */
    const Collectors_Delete = 43;
    /**
     * Write to the apps DB table.
     *
     * Generated from protobuf enum <code>Apps_Add = 44 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Apps_Get];</code>
     */
    const Apps_Add = 44;
    /**
     * Read from the apps DB table.
     *
     * Generated from protobuf enum <code>Apps_Get = 45 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Apps_Get = 45;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Apps_Delete = 46 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Apps_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Apps_Get];</code>
     */
    const Apps_Delete = 46;
    /**
     * Write to the keys DB table.
     *
     * Generated from protobuf enum <code>Keys_Add = 47 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Keys_Get];</code>
     */
    const Keys_Add = 47;
    /**
     * Read from the keys DB table.
     *
     * Generated from protobuf enum <code>Keys_Get = 48 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Keys_Get = 48;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Keys_Delete = 49 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Keys_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Keys_Get];</code>
     */
    const Keys_Delete = 49;
    /**
     * Write to the app sharing DB table
     *
     * Generated from protobuf enum <code>Collaborators_Add = 51 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Collaborators_Get];</code>
     */
    const Collaborators_Add = 51;
    /**
     * Read from the app sharing DB table
     *
     * Generated from protobuf enum <code>Collaborators_Get = 50 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Collaborators_Get = 50;
    /**
     * To delete we need read/write
     *
     * Generated from protobuf enum <code>Collaborators_Delete = 52 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Collaborators_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Collaborators_Get];</code>
     */
    const Collaborators_Delete = 52;
    /**
     * Write to the metrics table
     *
     * Generated from protobuf enum <code>Metrics_Add = 54 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Metrics_Get];</code>
     */
    const Metrics_Add = 54;
    /**
     * Read from metrics table
     *
     * Generated from protobuf enum <code>Metrics_Get = 53 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Metrics_Get = 53;
    /**
     * To delete we need read/write
     *
     * Generated from protobuf enum <code>Metrics_Delete = 63 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Metrics_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Metrics_Get];</code>
     */
    const Metrics_Delete = 63;
    /**
     * Write to tasks DB table.
     *
     * Generated from protobuf enum <code>Tasks_Add = 55 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Tasks_Get];</code>
     */
    const Tasks_Add = 55;
    /**
     * Read from the tasks DB table.
     *
     * Generated from protobuf enum <code>Tasks_Get = 56 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Tasks_Get = 56;
    /**
     * To delete we need read/write
     *
     * Generated from protobuf enum <code>Tasks_Delete = 70 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Tasks_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Tasks_Get];</code>
     */
    const Tasks_Delete = 70;
    /**
     * Write to the password_policies DB table
     *
     * Generated from protobuf enum <code>PasswordPolicies_Add = 57 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = PasswordPolicies_Get];</code>
     */
    const PasswordPolicies_Add = 57;
    /**
     * Read from the password_policies DB table
     *
     * Generated from protobuf enum <code>PasswordPolicies_Get = 58 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const PasswordPolicies_Get = 58;
    /**
     * To delete password_policies we need read/write
     *
     * Generated from protobuf enum <code>PasswordPolicies_Delete = 59 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = PasswordPolicies_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = PasswordPolicies_Get];</code>
     */
    const PasswordPolicies_Delete = 59;
    /**
     * Read from label orders table
     *
     * Generated from protobuf enum <code>LabelOrders_Get = 67 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const LabelOrders_Get = 67;
    /**
     * Write to label orders table
     *
     * Generated from protobuf enum <code>LabelOrders_Add = 68 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = LabelOrders_Get];</code>
     */
    const LabelOrders_Add = 68;
    /**
     * To delete label orders we need read/write
     *
     * Generated from protobuf enum <code>LabelOrders_Delete = 69 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = LabelOrders_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = LabelOrders_Get];</code>
     */
    const LabelOrders_Delete = 69;
    /**
     * CRUD on FindDuplicateAnnotationsJobs table
     *
     * Generated from protobuf enum <code>FindDuplicateAnnotationsJobs_Add = 102 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = FindDuplicateAnnotationsJobs_Get];</code>
     */
    const FindDuplicateAnnotationsJobs_Add = 102;
    /**
     * Generated from protobuf enum <code>FindDuplicateAnnotationsJobs_Get = 103 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const FindDuplicateAnnotationsJobs_Get = 103;
    /**
     * Generated from protobuf enum <code>FindDuplicateAnnotationsJobs_Delete = 104 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = FindDuplicateAnnotationsJobs_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = FindDuplicateAnnotationsJobs_Get];</code>
     */
    const FindDuplicateAnnotationsJobs_Delete = 104;
    /**
     * Generated from protobuf enum <code>Datasets_Get = 105 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Datasets_Get = 105;
    /**
     * Generated from protobuf enum <code>Datasets_Add = 106 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Datasets_Get];</code>
     */
    const Datasets_Add = 106;
    /**
     * Generated from protobuf enum <code>Datasets_Delete = 107 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Datasets_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Datasets_Add];</code>
     */
    const Datasets_Delete = 107;
    /**
     * Write to the modules DB tables.
     *
     * Generated from protobuf enum <code>Modules_Add = 108 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Modules_Get];</code>
     */
    const Modules_Add = 108;
    /**
     * Read from the modules and modules versions DB tables.
     *
     * Generated from protobuf enum <code>Modules_Get = 109 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Modules_Get = 109;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>Modules_Delete = 110 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Modules_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = Modules_Get];</code>
     */
    const Modules_Delete = 110;
    /**
     * Write to the InstalledModuleVersions DB tables.
     *
     * Generated from protobuf enum <code>InstalledModuleVersions_Add = 111 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = InstalledModuleVersions_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Modules_Get];</code>
     */
    const InstalledModuleVersions_Add = 111;
    /**
     * Read from the InstalledModuleVersions and InstalledModuleVersions versions DB tables.
     *
     * Generated from protobuf enum <code>InstalledModuleVersions_Get = 112 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Modules_Get];</code>
     */
    const InstalledModuleVersions_Get = 112;
    /**
     * To delete we need read/write.
     *
     * Generated from protobuf enum <code>InstalledModuleVersions_Delete = 113 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = InstalledModuleVersions_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = InstalledModuleVersions_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Modules_Get];</code>
     */
    const InstalledModuleVersions_Delete = 113;
    /**
     * Make an rpc to our search services.
     *
     * Generated from protobuf enum <code>Search = 3 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Search = 3;
    /**
     * To get a saved search.
     *
     * Generated from protobuf enum <code>SavedSearch_Get = 114 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const SavedSearch_Get = 114;
    /**
     * To add a saved search
     *
     * Generated from protobuf enum <code>SavedSearch_Add = 115 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = SavedSearch_Get];</code>
     */
    const SavedSearch_Add = 115;
    /**
     * To delete a saved search
     *
     * Generated from protobuf enum <code>SavedSearch_Delete = 116 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = SavedSearch_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = SavedSearch_Add];</code>
     */
    const SavedSearch_Delete = 116;
    /**
     * Generated from protobuf enum <code>ModelVersionPublications_Add = 117 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const ModelVersionPublications_Add = 117;
    /**
     * Generated from protobuf enum <code>ModelVersionPublications_Delete = 118 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const ModelVersionPublications_Delete = 118;
    /**
     * Generated from protobuf enum <code>WorkflowPublications_Add = 119 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const WorkflowPublications_Add = 119;
    /**
     * Generated from protobuf enum <code>WorkflowPublications_Delete = 120 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const WorkflowPublications_Delete = 120;
    /**
     * To write bulk operations to the DB
     *
     * Generated from protobuf enum <code>BulkOperation_Add = 121 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = BulkOperation_Get];</code>
     */
    const BulkOperation_Add = 121;
    /**
     * To Read Bulk Operations from the DB
     *
     * Generated from protobuf enum <code>BulkOperation_Get = 122 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const BulkOperation_Get = 122;
    /**
     * To Delete Bulk Operations from the DB
     *
     * Generated from protobuf enum <code>BulkOperation_Delete = 123 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = BulkOperation_Add, (.clarifai.auth.scope.clarifai_depending_scopes) = BulkOperation_Get];</code>
     */
    const BulkOperation_Delete = 123;
    /**
     * To read historical usage from usage.dashboard_items table
     *
     * Generated from protobuf enum <code>HistoricalUsage_Get = 124;</code>
     */
    const HistoricalUsage_Get = 124;
    /**
     * To read uploaded files and archives info from Uploads endpoints
     *
     * Generated from protobuf enum <code>Uploads_Get = 128 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Uploads_Get = 128;
    /**
     * To upload files or archives through the Uploads endpoints
     *
     * Generated from protobuf enum <code>Uploads_Add = 129 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Uploads_Get];</code>
     */
    const Uploads_Add = 129;
    /**
     * Generated from protobuf enum <code>Uploads_Delete = 130 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Uploads_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Uploads_Add];</code>
     */
    const Uploads_Delete = 130;
    /**
     * To control remote runners
     *
     * Generated from protobuf enum <code>Runners_Get = 131 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Runners_Get = 131;
    /**
     * Generated from protobuf enum <code>Runners_Add = 132 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Runners_Get];</code>
     */
    const Runners_Add = 132;
    /**
     * Generated from protobuf enum <code>Runners_Delete = 133 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Runners_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Runners_Add];</code>
     */
    const Runners_Delete = 133;
    /**
     * Generated from protobuf enum <code>RunnerItems_Get = 134 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const RunnerItems_Get = 134;
    /**
     * Generated from protobuf enum <code>RunnerItems_Add = 135 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = RunnerItems_Get];</code>
     */
    const RunnerItems_Add = 135;
    /**
     * Pools of compute resources.
     *
     * Generated from protobuf enum <code>Nodepools_Get = 136 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Nodepools_Get = 136;
    /**
     * Generated from protobuf enum <code>Nodepools_Add = 137 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Nodepools_Get];</code>
     */
    const Nodepools_Add = 137;
    /**
     * Generated from protobuf enum <code>Nodepools_Delete = 138 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Nodepools_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Nodepools_Add];</code>
     */
    const Nodepools_Delete = 138;
    /**
     * Cluster of machines in a region of cloud
     *
     * Generated from protobuf enum <code>ComputeClusters_Get = 139 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const ComputeClusters_Get = 139;
    /**
     * Generated from protobuf enum <code>ComputeClusters_Add = 140 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = ComputeClusters_Get];</code>
     */
    const ComputeClusters_Add = 140;
    /**
     * Generated from protobuf enum <code>ComputeClusters_Delete = 141 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = ComputeClusters_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = ComputeClusters_Add];</code>
     */
    const ComputeClusters_Delete = 141;
    /**
     * How to autoscale resources within nodepools.
     *
     * Generated from protobuf enum <code>Deployments_Get = 144 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Deployments_Get = 144;
    /**
     * Generated from protobuf enum <code>Deployments_Add = 145 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Deployments_Get];</code>
     */
    const Deployments_Add = 145;
    /**
     * Generated from protobuf enum <code>Deployments_Delete = 146 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Deployments_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Deployments_Add];</code>
     */
    const Deployments_Delete = 146;
    /**
     * Generated from protobuf enum <code>InstanceTypes_Get = 148 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const InstanceTypes_Get = 148;
    /**
     * Generated from protobuf enum <code>AuditLogs_Get = 149 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const AuditLogs_Get = 149;
    /**
     * Generated from protobuf enum <code>LogEntries_Get = 151 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const LogEntries_Get = 151;
    /**
     * Generated from protobuf enum <code>WorkflowVersionEvaluations_Get = 152 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const WorkflowVersionEvaluations_Get = 152;
    /**
     * Generated from protobuf enum <code>WorkflowVersionEvaluations_Add = 153 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = WorkflowVersionEvaluations_Get];</code>
     */
    const WorkflowVersionEvaluations_Add = 153;
    /**
     * Generated from protobuf enum <code>Pipelines_Get = 154 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Pipelines_Get = 154;
    /**
     * Generated from protobuf enum <code>Pipelines_Add = 155 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Pipelines_Get];</code>
     */
    const Pipelines_Add = 155;
    /**
     * Generated from protobuf enum <code>Pipelines_Delete = 156 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Pipelines_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Pipelines_Add];</code>
     */
    const Pipelines_Delete = 156;
    /**
     * Generated from protobuf enum <code>PipelineSteps_Get = 157 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const PipelineSteps_Get = 157;
    /**
     * Generated from protobuf enum <code>PipelineSteps_Add = 158 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = PipelineSteps_Get];</code>
     */
    const PipelineSteps_Add = 158;
    /**
     * To pull the pipeline step version's image
     *
     * Generated from protobuf enum <code>PipelineSteps_Pull = 159 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = PipelineSteps_Get];</code>
     */
    const PipelineSteps_Pull = 159;
    /**
     * Generated from protobuf enum <code>Secrets_Get = 160 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const Secrets_Get = 160;
    /**
     * Generated from protobuf enum <code>Secrets_Add = 161 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Secrets_Get];</code>
     */
    const Secrets_Add = 161;
    /**
     * Generated from protobuf enum <code>Secrets_Delete = 162 [(.clarifai.auth.scope.clarfai_exposed) = true, (.clarifai.auth.scope.clarifai_depending_scopes) = Secrets_Get, (.clarifai.auth.scope.clarifai_depending_scopes) = Secrets_Add];</code>
     */
    const Secrets_Delete = 162;

    private static $valueToName = [
        self::undef => 'undef',
        self::All => 'All',
        self::Predict => 'Predict',
        self::Inputs_Add => 'Inputs_Add',
        self::Inputs_Get => 'Inputs_Get',
        self::Inputs_Patch => 'Inputs_Patch',
        self::Inputs_Delete => 'Inputs_Delete',
        self::Outputs_Patch => 'Outputs_Patch',
        self::Concepts_Add => 'Concepts_Add',
        self::Concepts_Get => 'Concepts_Get',
        self::Concepts_Patch => 'Concepts_Patch',
        self::Concepts_Delete => 'Concepts_Delete',
        self::Models_Add => 'Models_Add',
        self::Models_Get => 'Models_Get',
        self::Models_Patch => 'Models_Patch',
        self::Models_Delete => 'Models_Delete',
        self::Models_Train => 'Models_Train',
        self::Models_Sync => 'Models_Sync',
        self::ModelExports_Get => 'ModelExports_Get',
        self::ModelExports_Add => 'ModelExports_Add',
        self::Models_Pull => 'Models_Pull',
        self::Workflows_Add => 'Workflows_Add',
        self::Workflows_Get => 'Workflows_Get',
        self::Workflows_Patch => 'Workflows_Patch',
        self::Workflows_Delete => 'Workflows_Delete',
        self::WorkflowMetrics_Get => 'WorkflowMetrics_Get',
        self::WorkflowMetrics_Add => 'WorkflowMetrics_Add',
        self::WorkflowMetrics_Delete => 'WorkflowMetrics_Delete',
        self::TSNEVisualizations_Add => 'TSNEVisualizations_Add',
        self::TSNEVisualizations_Get => 'TSNEVisualizations_Get',
        self::Annotations_Add => 'Annotations_Add',
        self::Annotations_Get => 'Annotations_Get',
        self::Annotations_Patch => 'Annotations_Patch',
        self::Annotations_Delete => 'Annotations_Delete',
        self::Collectors_Add => 'Collectors_Add',
        self::Collectors_Get => 'Collectors_Get',
        self::Collectors_Delete => 'Collectors_Delete',
        self::Apps_Add => 'Apps_Add',
        self::Apps_Get => 'Apps_Get',
        self::Apps_Delete => 'Apps_Delete',
        self::Keys_Add => 'Keys_Add',
        self::Keys_Get => 'Keys_Get',
        self::Keys_Delete => 'Keys_Delete',
        self::Collaborators_Add => 'Collaborators_Add',
        self::Collaborators_Get => 'Collaborators_Get',
        self::Collaborators_Delete => 'Collaborators_Delete',
        self::Metrics_Add => 'Metrics_Add',
        self::Metrics_Get => 'Metrics_Get',
        self::Metrics_Delete => 'Metrics_Delete',
        self::Tasks_Add => 'Tasks_Add',
        self::Tasks_Get => 'Tasks_Get',
        self::Tasks_Delete => 'Tasks_Delete',
        self::PasswordPolicies_Add => 'PasswordPolicies_Add',
        self::PasswordPolicies_Get => 'PasswordPolicies_Get',
        self::PasswordPolicies_Delete => 'PasswordPolicies_Delete',
        self::LabelOrders_Get => 'LabelOrders_Get',
        self::LabelOrders_Add => 'LabelOrders_Add',
        self::LabelOrders_Delete => 'LabelOrders_Delete',
        self::FindDuplicateAnnotationsJobs_Add => 'FindDuplicateAnnotationsJobs_Add',
        self::FindDuplicateAnnotationsJobs_Get => 'FindDuplicateAnnotationsJobs_Get',
        self::FindDuplicateAnnotationsJobs_Delete => 'FindDuplicateAnnotationsJobs_Delete',
        self::Datasets_Get => 'Datasets_Get',
        self::Datasets_Add => 'Datasets_Add',
        self::Datasets_Delete => 'Datasets_Delete',
        self::Modules_Add => 'Modules_Add',
        self::Modules_Get => 'Modules_Get',
        self::Modules_Delete => 'Modules_Delete',
        self::InstalledModuleVersions_Add => 'InstalledModuleVersions_Add',
        self::InstalledModuleVersions_Get => 'InstalledModuleVersions_Get',
        self::InstalledModuleVersions_Delete => 'InstalledModuleVersions_Delete',
        self::Search => 'Search',
        self::SavedSearch_Get => 'SavedSearch_Get',
        self::SavedSearch_Add => 'SavedSearch_Add',
        self::SavedSearch_Delete => 'SavedSearch_Delete',
        self::ModelVersionPublications_Add => 'ModelVersionPublications_Add',
        self::ModelVersionPublications_Delete => 'ModelVersionPublications_Delete',
        self::WorkflowPublications_Add => 'WorkflowPublications_Add',
        self::WorkflowPublications_Delete => 'WorkflowPublications_Delete',
        self::BulkOperation_Add => 'BulkOperation_Add',
        self::BulkOperation_Get => 'BulkOperation_Get',
        self::BulkOperation_Delete => 'BulkOperation_Delete',
        self::HistoricalUsage_Get => 'HistoricalUsage_Get',
        self::Uploads_Get => 'Uploads_Get',
        self::Uploads_Add => 'Uploads_Add',
        self::Uploads_Delete => 'Uploads_Delete',
        self::Runners_Get => 'Runners_Get',
        self::Runners_Add => 'Runners_Add',
        self::Runners_Delete => 'Runners_Delete',
        self::RunnerItems_Get => 'RunnerItems_Get',
        self::RunnerItems_Add => 'RunnerItems_Add',
        self::Nodepools_Get => 'Nodepools_Get',
        self::Nodepools_Add => 'Nodepools_Add',
        self::Nodepools_Delete => 'Nodepools_Delete',
        self::ComputeClusters_Get => 'ComputeClusters_Get',
        self::ComputeClusters_Add => 'ComputeClusters_Add',
        self::ComputeClusters_Delete => 'ComputeClusters_Delete',
        self::Deployments_Get => 'Deployments_Get',
        self::Deployments_Add => 'Deployments_Add',
        self::Deployments_Delete => 'Deployments_Delete',
        self::InstanceTypes_Get => 'InstanceTypes_Get',
        self::AuditLogs_Get => 'AuditLogs_Get',
        self::LogEntries_Get => 'LogEntries_Get',
        self::WorkflowVersionEvaluations_Get => 'WorkflowVersionEvaluations_Get',
        self::WorkflowVersionEvaluations_Add => 'WorkflowVersionEvaluations_Add',
        self::Pipelines_Get => 'Pipelines_Get',
        self::Pipelines_Add => 'Pipelines_Add',
        self::Pipelines_Delete => 'Pipelines_Delete',
        self::PipelineSteps_Get => 'PipelineSteps_Get',
        self::PipelineSteps_Add => 'PipelineSteps_Add',
        self::PipelineSteps_Pull => 'PipelineSteps_Pull',
        self::Secrets_Get => 'Secrets_Get',
        self::Secrets_Add => 'Secrets_Add',
        self::Secrets_Delete => 'Secrets_Delete',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


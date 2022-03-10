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
     * Read from user_feature_configs table
     *
     * Generated from protobuf enum <code>UserFeatureConfigs_Get = 71 [(.clarifai.auth.scope.clarfai_exposed) = true];</code>
     */
    const UserFeatureConfigs_Get = 71;
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
        self::UserFeatureConfigs_Get => 'UserFeatureConfigs_Get',
        self::FindDuplicateAnnotationsJobs_Add => 'FindDuplicateAnnotationsJobs_Add',
        self::FindDuplicateAnnotationsJobs_Get => 'FindDuplicateAnnotationsJobs_Get',
        self::FindDuplicateAnnotationsJobs_Delete => 'FindDuplicateAnnotationsJobs_Delete',
        self::Search => 'Search',
        self::SavedSearch_Get => 'SavedSearch_Get',
        self::SavedSearch_Add => 'SavedSearch_Add',
        self::SavedSearch_Delete => 'SavedSearch_Delete',
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


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchAction
 *
 * Generated from protobuf message <code>clarifai.api.PatchAction</code>
 */
class PatchAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The operation to perform on the patched metadata given a path
     * For now only operations 'overwrite', 'delete, and 'merge' is supported
     *
     * Generated from protobuf field <code>string op = 1;</code>
     */
    protected $op = '';
    /**
     * If the action is 'merge' and there is a conflict, how to resolve it.
     * The options are
     * 'overwrite_by_id', 'remove_by_id', 'merge_by_id','overwrite', 'append' and 'do_nothing'
     * Note that for conflict resolutions '*_by_id' to work on a list, the list should contain
     * objects with an 'id' field which will be used to uniquely identify each field. For example
     * Patching existing json
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": 2
     *     }
     *   ]
     * }
     * with op 'merge' and merge_conflict_resolution 'overwrite_by_id'
     * {
     *   "tag": [
     *     {
     *       "id": "2",
     *       "data": 3
     *     }
     *   ]
     * }
     * would produce
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": 3
     *     }
     *   ]
     * }
     * while with merge_conflict_resolution 'remove_by_id' it would produce
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     }
     *   ]
     * }
     * Option 'append' will simply create a list on conflicts. For example in above example
     * the final result would be
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": [2, 3]
     *     }
     *   ]
     * }
     *
     * Generated from protobuf field <code>string merge_conflict_resolution = 2;</code>
     */
    protected $merge_conflict_resolution = '';
    /**
     * Path for the change. For example 'tag[1].data' is a valid path in above example.
     * Default path is root level i.e. ''.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     */
    protected $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $op
     *           The operation to perform on the patched metadata given a path
     *           For now only operations 'overwrite', 'delete, and 'merge' is supported
     *     @type string $merge_conflict_resolution
     *           If the action is 'merge' and there is a conflict, how to resolve it.
     *           The options are
     *           'overwrite_by_id', 'remove_by_id', 'merge_by_id','overwrite', 'append' and 'do_nothing'
     *           Note that for conflict resolutions '*_by_id' to work on a list, the list should contain
     *           objects with an 'id' field which will be used to uniquely identify each field. For example
     *           Patching existing json
     *           {
     *             "tag": [
     *               {
     *                 "id": "1",
     *                 "data": 1
     *               },
     *               {
     *                 "id": "2",
     *                 "data": 2
     *               }
     *             ]
     *           }
     *           with op 'merge' and merge_conflict_resolution 'overwrite_by_id'
     *           {
     *             "tag": [
     *               {
     *                 "id": "2",
     *                 "data": 3
     *               }
     *             ]
     *           }
     *           would produce
     *           {
     *             "tag": [
     *               {
     *                 "id": "1",
     *                 "data": 1
     *               },
     *               {
     *                 "id": "2",
     *                 "data": 3
     *               }
     *             ]
     *           }
     *           while with merge_conflict_resolution 'remove_by_id' it would produce
     *           {
     *             "tag": [
     *               {
     *                 "id": "1",
     *                 "data": 1
     *               }
     *             ]
     *           }
     *           Option 'append' will simply create a list on conflicts. For example in above example
     *           the final result would be
     *           {
     *             "tag": [
     *               {
     *                 "id": "1",
     *                 "data": 1
     *               },
     *               {
     *                 "id": "2",
     *                 "data": [2, 3]
     *               }
     *             ]
     *           }
     *     @type string $path
     *           Path for the change. For example 'tag[1].data' is a valid path in above example.
     *           Default path is root level i.e. ''.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The operation to perform on the patched metadata given a path
     * For now only operations 'overwrite', 'delete, and 'merge' is supported
     *
     * Generated from protobuf field <code>string op = 1;</code>
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The operation to perform on the patched metadata given a path
     * For now only operations 'overwrite', 'delete, and 'merge' is supported
     *
     * Generated from protobuf field <code>string op = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, True);
        $this->op = $var;

        return $this;
    }

    /**
     * If the action is 'merge' and there is a conflict, how to resolve it.
     * The options are
     * 'overwrite_by_id', 'remove_by_id', 'merge_by_id','overwrite', 'append' and 'do_nothing'
     * Note that for conflict resolutions '*_by_id' to work on a list, the list should contain
     * objects with an 'id' field which will be used to uniquely identify each field. For example
     * Patching existing json
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": 2
     *     }
     *   ]
     * }
     * with op 'merge' and merge_conflict_resolution 'overwrite_by_id'
     * {
     *   "tag": [
     *     {
     *       "id": "2",
     *       "data": 3
     *     }
     *   ]
     * }
     * would produce
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": 3
     *     }
     *   ]
     * }
     * while with merge_conflict_resolution 'remove_by_id' it would produce
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     }
     *   ]
     * }
     * Option 'append' will simply create a list on conflicts. For example in above example
     * the final result would be
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": [2, 3]
     *     }
     *   ]
     * }
     *
     * Generated from protobuf field <code>string merge_conflict_resolution = 2;</code>
     * @return string
     */
    public function getMergeConflictResolution()
    {
        return $this->merge_conflict_resolution;
    }

    /**
     * If the action is 'merge' and there is a conflict, how to resolve it.
     * The options are
     * 'overwrite_by_id', 'remove_by_id', 'merge_by_id','overwrite', 'append' and 'do_nothing'
     * Note that for conflict resolutions '*_by_id' to work on a list, the list should contain
     * objects with an 'id' field which will be used to uniquely identify each field. For example
     * Patching existing json
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": 2
     *     }
     *   ]
     * }
     * with op 'merge' and merge_conflict_resolution 'overwrite_by_id'
     * {
     *   "tag": [
     *     {
     *       "id": "2",
     *       "data": 3
     *     }
     *   ]
     * }
     * would produce
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": 3
     *     }
     *   ]
     * }
     * while with merge_conflict_resolution 'remove_by_id' it would produce
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     }
     *   ]
     * }
     * Option 'append' will simply create a list on conflicts. For example in above example
     * the final result would be
     * {
     *   "tag": [
     *     {
     *       "id": "1",
     *       "data": 1
     *     },
     *     {
     *       "id": "2",
     *       "data": [2, 3]
     *     }
     *   ]
     * }
     *
     * Generated from protobuf field <code>string merge_conflict_resolution = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMergeConflictResolution($var)
    {
        GPBUtil::checkString($var, True);
        $this->merge_conflict_resolution = $var;

        return $this;
    }

    /**
     * Path for the change. For example 'tag[1].data' is a valid path in above example.
     * Default path is root level i.e. ''.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path for the change. For example 'tag[1].data' is a valid path in above example.
     * Default path is root level i.e. ''.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}


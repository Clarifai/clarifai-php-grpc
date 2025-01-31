<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a numpy array as a proto.
 * To convert a numpy array 'ndarray' to this proto do:
 * NDArray(buffer=ndarray.tobytes(), shape=ndarray.shape, dtype=str(ndarray.dtype))
 * To convert this proto 'ndarray_proto' to a numpy array:
 * array = np.frombuffer(ndarray_proto.buffer, dtype=ndarray_proto.dtype)
 * array = array.reshape(tuple(ndarray_proto.shape))
 *
 * Generated from protobuf message <code>clarifai.api.NDArray</code>
 */
class NDArray extends \Google\Protobuf\Internal\Message
{
    /**
     * The bytes of data from the array from array.tobytes()
     *
     * Generated from protobuf field <code>bytes buffer = 1;</code>
     */
    protected $buffer = '';
    /**
     * Simply the shape of the numpy array. array.shape.
     *
     * Generated from protobuf field <code>repeated uint32 shape = 2;</code>
     */
    private $shape;
    /**
     * Dtype for numpy. You can get it back from this string format using:
     * np.dtype('float32') for example.
     *
     * Generated from protobuf field <code>string dtype = 3;</code>
     */
    protected $dtype = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $buffer
     *           The bytes of data from the array from array.tobytes()
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $shape
     *           Simply the shape of the numpy array. array.shape.
     *     @type string $dtype
     *           Dtype for numpy. You can get it back from this string format using:
     *           np.dtype('float32') for example.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The bytes of data from the array from array.tobytes()
     *
     * Generated from protobuf field <code>bytes buffer = 1;</code>
     * @return string
     */
    public function getBuffer()
    {
        return $this->buffer;
    }

    /**
     * The bytes of data from the array from array.tobytes()
     *
     * Generated from protobuf field <code>bytes buffer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBuffer($var)
    {
        GPBUtil::checkString($var, False);
        $this->buffer = $var;

        return $this;
    }

    /**
     * Simply the shape of the numpy array. array.shape.
     *
     * Generated from protobuf field <code>repeated uint32 shape = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Simply the shape of the numpy array. array.shape.
     *
     * Generated from protobuf field <code>repeated uint32 shape = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShape($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->shape = $arr;

        return $this;
    }

    /**
     * Dtype for numpy. You can get it back from this string format using:
     * np.dtype('float32') for example.
     *
     * Generated from protobuf field <code>string dtype = 3;</code>
     * @return string
     */
    public function getDtype()
    {
        return $this->dtype;
    }

    /**
     * Dtype for numpy. You can get it back from this string format using:
     * np.dtype('float32') for example.
     *
     * Generated from protobuf field <code>string dtype = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDtype($var)
    {
        GPBUtil::checkString($var, True);
        $this->dtype = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status.proto

namespace GPBMetadata\Proto\Clarifai\Api\Status;

class Status
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Auth\Util\Extension::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Status\StatusCode::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&proto/clarifai/api/status/status.protoclarifai.api.status+proto/clarifai/api/status/status_code.proto"�
Status-
code (2.clarifai.api.status.StatusCode
description (	
details (	
stack_trace (	B��\'
percent_completed (
time_remaining (
req_id (	
internal_details (	B��\'>
redirect_info	 (2!.clarifai.api.status.RedirectInfoB��\'
developer_notes
 (	"d
RedirectInfo
url (	
resource_type (	
old_resource_id (	
new_resource_id (	";
BaseResponse+
status (2.clarifai.api.status.StatusBg
com.clarifai.grpc.api.statusPZ>github.com/Clarifai/clarifai-go-grpc/proto/clarifai/api/status�CAIPbproto3'
        , true);

        static::$is_initialized = true;
    }
}


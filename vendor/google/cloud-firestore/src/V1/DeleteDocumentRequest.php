<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.DeleteDocument][google.firestore.v1.Firestore.DeleteDocument].
 *
 * Generated from protobuf message <code>google.firestore.v1.DeleteDocumentRequest</code>
 */
class DeleteDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Document to delete. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * An optional precondition on the document.
     * The request will fail if this is set and not met by the target document.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Precondition current_document = 2;</code>
     */
    private $current_document = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Document to delete. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *     @type \Google\Cloud\Firestore\V1\Precondition $current_document
     *           An optional precondition on the document.
     *           The request will fail if this is set and not met by the target document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Document to delete. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Document to delete. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * An optional precondition on the document.
     * The request will fail if this is set and not met by the target document.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Precondition current_document = 2;</code>
     * @return \Google\Cloud\Firestore\V1\Precondition|null
     */
    public function getCurrentDocument()
    {
        return isset($this->current_document) ? $this->current_document : null;
    }

    public function hasCurrentDocument()
    {
        return isset($this->current_document);
    }

    public function clearCurrentDocument()
    {
        unset($this->current_document);
    }

    /**
     * An optional precondition on the document.
     * The request will fail if this is set and not met by the target document.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Precondition current_document = 2;</code>
     * @param \Google\Cloud\Firestore\V1\Precondition $var
     * @return $this
     */
    public function setCurrentDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Precondition::class);
        $this->current_document = $var;

        return $this;
    }

}


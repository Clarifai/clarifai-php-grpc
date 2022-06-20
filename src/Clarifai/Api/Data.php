<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data
 *
 * Generated from protobuf message <code>clarifai.api.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    /**
     * Input and output images.
     *
     * Generated from protobuf field <code>.clarifai.api.Image image = 1;</code>
     */
    protected $image = null;
    /**
     * Input and output videos.
     *
     * Generated from protobuf field <code>.clarifai.api.Video video = 2;</code>
     */
    protected $video = null;
    /**
     * A list of concepts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept concepts = 3;</code>
     */
    private $concepts;
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 5;</code>
     */
    protected $metadata = null;
    /**
     * Geography information.
     *
     * Generated from protobuf field <code>.clarifai.api.Geo geo = 6;</code>
     */
    protected $geo = null;
    /**
     * The dominant colors within an image.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Color colors = 7;</code>
     */
    private $colors;
    /**
     * Clustering centroids for inputs.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Cluster clusters = 8;</code>
     */
    private $clusters;
    /**
     * Embedding vectors representing each input.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Embedding embeddings = 9;</code>
     */
    private $embeddings;
    /**
     * For recursing into localized regions of an input.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Region regions = 11;</code>
     */
    private $regions;
    /**
     * For temporal content like video.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Frame frames = 12;</code>
     */
    private $frames;
    /**
     * Input, output or annotation text.
     *
     * Generated from protobuf field <code>.clarifai.api.Text text = 13;</code>
     */
    protected $text = null;
    /**
     * Input and output audio.
     *
     * Generated from protobuf field <code>.clarifai.api.Audio audio = 14;</code>
     */
    protected $audio = null;
    /**
     * Track information.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Track tracks = 15;</code>
     */
    private $tracks;
    /**
     * Time segments information.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.TimeSegment time_segments = 16;</code>
     */
    private $time_segments;
    /**
     * Holds score, rank, and user, app, input IDs and search hit data
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 17;</code>
     */
    private $hits;
    /**
     * Heatmap as 2d image
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Image heatmaps = 18;</code>
     */
    private $heatmaps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Image $image
     *           Input and output images.
     *     @type \Clarifai\Api\Video $video
     *           Input and output videos.
     *     @type \Clarifai\Api\Concept[]|\Google\Protobuf\Internal\RepeatedField $concepts
     *           A list of concepts.
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *     @type \Clarifai\Api\Geo $geo
     *           Geography information.
     *     @type \Clarifai\Api\Color[]|\Google\Protobuf\Internal\RepeatedField $colors
     *           The dominant colors within an image.
     *     @type \Clarifai\Api\Cluster[]|\Google\Protobuf\Internal\RepeatedField $clusters
     *           Clustering centroids for inputs.
     *     @type \Clarifai\Api\Embedding[]|\Google\Protobuf\Internal\RepeatedField $embeddings
     *           Embedding vectors representing each input.
     *     @type \Clarifai\Api\Region[]|\Google\Protobuf\Internal\RepeatedField $regions
     *           For recursing into localized regions of an input.
     *     @type \Clarifai\Api\Frame[]|\Google\Protobuf\Internal\RepeatedField $frames
     *           For temporal content like video.
     *     @type \Clarifai\Api\Text $text
     *           Input, output or annotation text.
     *     @type \Clarifai\Api\Audio $audio
     *           Input and output audio.
     *     @type \Clarifai\Api\Track[]|\Google\Protobuf\Internal\RepeatedField $tracks
     *           Track information.
     *     @type \Clarifai\Api\TimeSegment[]|\Google\Protobuf\Internal\RepeatedField $time_segments
     *           Time segments information.
     *     @type \Clarifai\Api\Hit[]|\Google\Protobuf\Internal\RepeatedField $hits
     *           Holds score, rank, and user, app, input IDs and search hit data
     *     @type \Clarifai\Api\Image[]|\Google\Protobuf\Internal\RepeatedField $heatmaps
     *           Heatmap as 2d image
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Input and output images.
     *
     * Generated from protobuf field <code>.clarifai.api.Image image = 1;</code>
     * @return \Clarifai\Api\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Input and output images.
     *
     * Generated from protobuf field <code>.clarifai.api.Image image = 1;</code>
     * @param \Clarifai\Api\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * Input and output videos.
     *
     * Generated from protobuf field <code>.clarifai.api.Video video = 2;</code>
     * @return \Clarifai\Api\Video|null
     */
    public function getVideo()
    {
        return $this->video;
    }

    public function hasVideo()
    {
        return isset($this->video);
    }

    public function clearVideo()
    {
        unset($this->video);
    }

    /**
     * Input and output videos.
     *
     * Generated from protobuf field <code>.clarifai.api.Video video = 2;</code>
     * @param \Clarifai\Api\Video $var
     * @return $this
     */
    public function setVideo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Video::class);
        $this->video = $var;

        return $this;
    }

    /**
     * A list of concepts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept concepts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConcepts()
    {
        return $this->concepts;
    }

    /**
     * A list of concepts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept concepts = 3;</code>
     * @param \Clarifai\Api\Concept[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConcepts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Concept::class);
        $this->concepts = $arr;

        return $this;
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Geography information.
     *
     * Generated from protobuf field <code>.clarifai.api.Geo geo = 6;</code>
     * @return \Clarifai\Api\Geo|null
     */
    public function getGeo()
    {
        return $this->geo;
    }

    public function hasGeo()
    {
        return isset($this->geo);
    }

    public function clearGeo()
    {
        unset($this->geo);
    }

    /**
     * Geography information.
     *
     * Generated from protobuf field <code>.clarifai.api.Geo geo = 6;</code>
     * @param \Clarifai\Api\Geo $var
     * @return $this
     */
    public function setGeo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Geo::class);
        $this->geo = $var;

        return $this;
    }

    /**
     * The dominant colors within an image.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Color colors = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * The dominant colors within an image.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Color colors = 7;</code>
     * @param \Clarifai\Api\Color[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Color::class);
        $this->colors = $arr;

        return $this;
    }

    /**
     * Clustering centroids for inputs.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Cluster clusters = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * Clustering centroids for inputs.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Cluster clusters = 8;</code>
     * @param \Clarifai\Api\Cluster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClusters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Cluster::class);
        $this->clusters = $arr;

        return $this;
    }

    /**
     * Embedding vectors representing each input.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Embedding embeddings = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmbeddings()
    {
        return $this->embeddings;
    }

    /**
     * Embedding vectors representing each input.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Embedding embeddings = 9;</code>
     * @param \Clarifai\Api\Embedding[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmbeddings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Embedding::class);
        $this->embeddings = $arr;

        return $this;
    }

    /**
     * For recursing into localized regions of an input.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Region regions = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * For recursing into localized regions of an input.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Region regions = 11;</code>
     * @param \Clarifai\Api\Region[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Region::class);
        $this->regions = $arr;

        return $this;
    }

    /**
     * For temporal content like video.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Frame frames = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * For temporal content like video.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Frame frames = 12;</code>
     * @param \Clarifai\Api\Frame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Frame::class);
        $this->frames = $arr;

        return $this;
    }

    /**
     * Input, output or annotation text.
     *
     * Generated from protobuf field <code>.clarifai.api.Text text = 13;</code>
     * @return \Clarifai\Api\Text|null
     */
    public function getText()
    {
        return $this->text;
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * Input, output or annotation text.
     *
     * Generated from protobuf field <code>.clarifai.api.Text text = 13;</code>
     * @param \Clarifai\Api\Text $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Text::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Input and output audio.
     *
     * Generated from protobuf field <code>.clarifai.api.Audio audio = 14;</code>
     * @return \Clarifai\Api\Audio|null
     */
    public function getAudio()
    {
        return $this->audio;
    }

    public function hasAudio()
    {
        return isset($this->audio);
    }

    public function clearAudio()
    {
        unset($this->audio);
    }

    /**
     * Input and output audio.
     *
     * Generated from protobuf field <code>.clarifai.api.Audio audio = 14;</code>
     * @param \Clarifai\Api\Audio $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Audio::class);
        $this->audio = $var;

        return $this;
    }

    /**
     * Track information.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Track tracks = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Track information.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Track tracks = 15;</code>
     * @param \Clarifai\Api\Track[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTracks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Track::class);
        $this->tracks = $arr;

        return $this;
    }

    /**
     * Time segments information.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.TimeSegment time_segments = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimeSegments()
    {
        return $this->time_segments;
    }

    /**
     * Time segments information.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.TimeSegment time_segments = 16;</code>
     * @param \Clarifai\Api\TimeSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimeSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\TimeSegment::class);
        $this->time_segments = $arr;

        return $this;
    }

    /**
     * Holds score, rank, and user, app, input IDs and search hit data
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Holds score, rank, and user, app, input IDs and search hit data
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 17;</code>
     * @param \Clarifai\Api\Hit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Hit::class);
        $this->hits = $arr;

        return $this;
    }

    /**
     * Heatmap as 2d image
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Image heatmaps = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeatmaps()
    {
        return $this->heatmaps;
    }

    /**
     * Heatmap as 2d image
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Image heatmaps = 18;</code>
     * @param \Clarifai\Api\Image[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeatmaps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Image::class);
        $this->heatmaps = $arr;

        return $this;
    }

}


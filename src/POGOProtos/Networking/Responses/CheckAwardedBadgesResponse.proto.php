<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/CheckAwardedBadgesResponse.proto.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  require('POGOProtos/Enums/BadgeType.proto.php');

  // message POGOProtos.Networking.Responses.CheckAwardedBadgesResponse
  final class CheckAwardedBadgesResponse extends ProtobufMessage {

    private $_unknown;
    private $success = false; // optional bool success = 1
    private $awardedBadges = array(); // repeated .POGOProtos.Enums.BadgeType awarded_badges = 2
    private $awardedBadgeLevels = array(); // repeated int32 awarded_badge_levels = 3

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional bool success = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->success = ($tmp > 0) ? true : false;

            break;
          case 2: // repeated .POGOProtos.Enums.BadgeType awarded_badges = 2
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->awardedBadges[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->awardedBadges[] = $tmp;
              }
            }

            break;
          case 3: // repeated int32 awarded_badge_levels = 3
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->awardedBadgeLevels[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->awardedBadgeLevels[] = $tmp;
              }
            }

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->success !== false) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->success ? 1 : 0);
      }
      foreach($this->awardedBadges as $v) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->awardedBadgeLevels as $v) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $v);
      }
    }

    public function size() {
      $size = 0;
      if ($this->success !== false) {
        $size += 2;
      }
      foreach($this->awardedBadges as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->awardedBadgeLevels as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearSuccess() { $this->success = false; }
    public function getSuccess() { return $this->success;}
    public function setSuccess($value) { $this->success = $value; }

    public function clearAwardedBadges() { $this->awardedBadges = array(); }
    public function getAwardedBadgesCount() { return count($this->awardedBadges); }
    public function getAwardedBadges($index) { return $this->awardedBadges[$index]; }
    public function getAwardedBadgesArray() { return $this->awardedBadges; }
    public function setAwardedBadges($index, array $value) {$this->awardedBadges[$index] = $value; }
    public function addAwardedBadges(array $value) { $this->awardedBadges[] = $value; }
    public function addAllAwardedBadges(array $values) { foreach($values as $value) {$this->awardedBadges[] = $value; }}

    public function clearAwardedBadgeLevels() { $this->awardedBadgeLevels = array(); }
    public function getAwardedBadgeLevelsCount() { return count($this->awardedBadgeLevels); }
    public function getAwardedBadgeLevels($index) { return $this->awardedBadgeLevels[$index]; }
    public function getAwardedBadgeLevelsArray() { return $this->awardedBadgeLevels; }
    public function setAwardedBadgeLevels($index, array $value) {$this->awardedBadgeLevels[$index] = $value; }
    public function addAwardedBadgeLevels(array $value) { $this->awardedBadgeLevels[] = $value; }
    public function addAllAwardedBadgeLevels(array $values) { foreach($values as $value) {$this->awardedBadgeLevels[] = $value; }}

    public function __toString() {
      return ''
           . Protobuf::toString('success', $this->success, false)
           . Protobuf::toString('awarded_badges', $this->awardedBadges, BadgeType::BADGE_UNSET)
           . Protobuf::toString('awarded_badge_levels', $this->awardedBadgeLevels, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.CheckAwardedBadgesResponse)
  }

}
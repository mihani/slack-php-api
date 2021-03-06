<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RtmStartGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\RtmStartGetResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\RtmStartGetResponse200;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\RtmStartGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'bots')) {
            $values = [];
            foreach ($data->{'bots'} as $value) {
                $values[] = $value;
            }
            $object->setBots($values);
            unset($data->{'bots'});
        }
        if (property_exists($data, 'cache_ts')) {
            $object->setCacheTs($data->{'cache_ts'});
            unset($data->{'cache_ts'});
        }
        if (property_exists($data, 'cache_ts_version')) {
            $object->setCacheTsVersion($data->{'cache_ts_version'});
            unset($data->{'cache_ts_version'});
        }
        if (property_exists($data, 'cache_version')) {
            $object->setCacheVersion($data->{'cache_version'});
            unset($data->{'cache_version'});
        }
        if (property_exists($data, 'can_manage_shared_channels')) {
            $object->setCanManageSharedChannels($data->{'can_manage_shared_channels'});
            unset($data->{'can_manage_shared_channels'});
        }
        if (property_exists($data, 'channels')) {
            $values_1 = [];
            foreach ($data->{'channels'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setChannels($values_1);
            unset($data->{'channels'});
        }
        if (property_exists($data, 'dead_pig')) {
            $object->setDeadPig($data->{'dead_pig'});
            unset($data->{'dead_pig'});
        }
        if (property_exists($data, 'dnd')) {
            $object->setDnd($this->denormalizer->denormalize($data->{'dnd'}, 'JoliCode\\Slack\\Api\\Model\\ObjsDnd', 'json', $context));
            unset($data->{'dnd'});
        }
        if (property_exists($data, 'groups')) {
            $values_2 = [];
            foreach ($data->{'groups'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setGroups($values_2);
            unset($data->{'groups'});
        }
        if (property_exists($data, 'ims')) {
            $values_3 = [];
            foreach ($data->{'ims'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setIms($values_3);
            unset($data->{'ims'});
        }
        if (property_exists($data, 'latest_event_ts')) {
            $object->setLatestEventTs($data->{'latest_event_ts'});
            unset($data->{'latest_event_ts'});
        }
        if (property_exists($data, 'mpims')) {
            $values_4 = [];
            foreach ($data->{'mpims'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setMpims($values_4);
            unset($data->{'mpims'});
        }
        if (property_exists($data, 'non_threadable_channels')) {
            $values_5 = [];
            foreach ($data->{'non_threadable_channels'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setNonThreadableChannels($values_5);
            unset($data->{'non_threadable_channels'});
        }
        if (property_exists($data, 'ok')) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        }
        if (property_exists($data, 'read_only_channels')) {
            $values_6 = [];
            foreach ($data->{'read_only_channels'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setReadOnlyChannels($values_6);
            unset($data->{'read_only_channels'});
        }
        if (property_exists($data, 'self')) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'JoliCode\\Slack\\Api\\Model\\RtmStartGetResponse200Self', 'json', $context));
            unset($data->{'self'});
        }
        if (property_exists($data, 'subteams')) {
            $object->setSubteams($this->denormalizer->denormalize($data->{'subteams'}, 'JoliCode\\Slack\\Api\\Model\\RtmStartGetResponse200Subteams', 'json', $context));
            unset($data->{'subteams'});
        }
        if (property_exists($data, 'team')) {
            $object->setTeam($this->denormalizer->denormalize($data->{'team'}, 'JoliCode\\Slack\\Api\\Model\\ObjsTeam', 'json', $context));
            unset($data->{'team'});
        }
        if (property_exists($data, 'thread_only_channels')) {
            $values_7 = [];
            foreach ($data->{'thread_only_channels'} as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setThreadOnlyChannels($values_7);
            unset($data->{'thread_only_channels'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
            unset($data->{'url'});
        }
        if (property_exists($data, 'users')) {
            $values_8 = [];
            foreach ($data->{'users'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'JoliCode\\Slack\\Api\\Model\\ObjsUser', 'json', $context);
            }
            $object->setUsers($values_8);
            unset($data->{'users'});
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_9;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBots()) {
            $values = [];
            foreach ($object->getBots() as $value) {
                $values[] = $value;
            }
            $data->{'bots'} = $values;
        }
        if (null !== $object->getCacheTs()) {
            $data->{'cache_ts'} = $object->getCacheTs();
        }
        if (null !== $object->getCacheTsVersion()) {
            $data->{'cache_ts_version'} = $object->getCacheTsVersion();
        }
        if (null !== $object->getCacheVersion()) {
            $data->{'cache_version'} = $object->getCacheVersion();
        }
        if (null !== $object->getCanManageSharedChannels()) {
            $data->{'can_manage_shared_channels'} = $object->getCanManageSharedChannels();
        }
        if (null !== $object->getChannels()) {
            $values_1 = [];
            foreach ($object->getChannels() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'channels'} = $values_1;
        }
        if (null !== $object->getDeadPig()) {
            $data->{'dead_pig'} = $object->getDeadPig();
        }
        if (null !== $object->getDnd()) {
            $data->{'dnd'} = $this->normalizer->normalize($object->getDnd(), 'json', $context);
        }
        if (null !== $object->getGroups()) {
            $values_2 = [];
            foreach ($object->getGroups() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'groups'} = $values_2;
        }
        if (null !== $object->getIms()) {
            $values_3 = [];
            foreach ($object->getIms() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'ims'} = $values_3;
        }
        if (null !== $object->getLatestEventTs()) {
            $data->{'latest_event_ts'} = $object->getLatestEventTs();
        }
        if (null !== $object->getMpims()) {
            $values_4 = [];
            foreach ($object->getMpims() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'mpims'} = $values_4;
        }
        if (null !== $object->getNonThreadableChannels()) {
            $values_5 = [];
            foreach ($object->getNonThreadableChannels() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'non_threadable_channels'} = $values_5;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getReadOnlyChannels()) {
            $values_6 = [];
            foreach ($object->getReadOnlyChannels() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'read_only_channels'} = $values_6;
        }
        if (null !== $object->getSelf()) {
            $data->{'self'} = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        if (null !== $object->getSubteams()) {
            $data->{'subteams'} = $this->normalizer->normalize($object->getSubteams(), 'json', $context);
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        }
        if (null !== $object->getThreadOnlyChannels()) {
            $values_7 = [];
            foreach ($object->getThreadOnlyChannels() as $value_7) {
                $values_7[] = $value_7;
            }
            $data->{'thread_only_channels'} = $values_7;
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getUsers()) {
            $values_8 = [];
            foreach ($object->getUsers() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'users'} = $values_8;
        }
        foreach ($object as $key => $value_9) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_9;
            }
        }

        return $data;
    }
}

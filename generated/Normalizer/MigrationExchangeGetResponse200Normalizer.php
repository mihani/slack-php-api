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

class MigrationExchangeGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\MigrationExchangeGetResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\MigrationExchangeGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'enterprise_id')) {
            $object->setEnterpriseId($data->{'enterprise_id'});
            unset($data->{'enterprise_id'});
        }
        if (property_exists($data, 'invalid_user_ids')) {
            $values = [];
            foreach ($data->{'invalid_user_ids'} as $value) {
                $values[] = $value;
            }
            $object->setInvalidUserIds($values);
            unset($data->{'invalid_user_ids'});
        }
        if (property_exists($data, 'ok')) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        }
        if (property_exists($data, 'team_id')) {
            $object->setTeamId($data->{'team_id'});
            unset($data->{'team_id'});
        }
        if (property_exists($data, 'user_id_map')) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'user_id_map'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setUserIdMap($values_1);
            unset($data->{'user_id_map'});
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', $key_1)) {
                $object[$key_1] = $value_2;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnterpriseId()) {
            $data->{'enterprise_id'} = $object->getEnterpriseId();
        }
        if (null !== $object->getInvalidUserIds()) {
            $values = [];
            foreach ($object->getInvalidUserIds() as $value) {
                $values[] = $value;
            }
            $data->{'invalid_user_ids'} = $values;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getTeamId()) {
            $data->{'team_id'} = $object->getTeamId();
        }
        if (null !== $object->getUserIdMap()) {
            $values_1 = new \stdClass();
            foreach ($object->getUserIdMap() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'user_id_map'} = $values_1;
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', $key_1)) {
                $data->{$key_1} = $value_2;
            }
        }

        return $data;
    }
}

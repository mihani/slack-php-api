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

class ObjsConversationItem0SharesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem0SharesItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsConversationItem0SharesItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationItem0SharesItem();
        $data = clone $data;
        if (property_exists($data, 'accepted_user')) {
            $object->setAcceptedUser($data->{'accepted_user'});
            unset($data->{'accepted_user'});
        }
        if (property_exists($data, 'is_active')) {
            $object->setIsActive($data->{'is_active'});
            unset($data->{'is_active'});
        }
        if (property_exists($data, 'team')) {
            $object->setTeam($this->denormalizer->denormalize($data->{'team'}, 'JoliCode\\Slack\\Api\\Model\\ObjsTeam', 'json', $context));
            unset($data->{'team'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAcceptedUser()) {
            $data->{'accepted_user'} = $object->getAcceptedUser();
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}

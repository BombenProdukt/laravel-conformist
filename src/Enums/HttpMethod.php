<?php

declare(strict_types=1);

namespace BombenProdukt\Conformist\Enums;

enum HttpMethod
{
    case GET;

    case POST;

    case PUT;

    case PATCH;

    case DELETE;

    case OPTIONS;
}

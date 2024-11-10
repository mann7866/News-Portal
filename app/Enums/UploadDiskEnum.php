<?php

namespace App\Enums;

enum UploadDiskEnum: string
{
    case NEWS_IMAGE = 'news-images';
    case ORGANIZATION_IMAGE = 'organization-images';
    case EMPLOYEE_IMAGE = 'employee-image';
}

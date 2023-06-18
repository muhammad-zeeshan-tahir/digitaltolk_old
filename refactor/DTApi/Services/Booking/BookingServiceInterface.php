<?php

namespace DTApi\Services\Booking\BookingService;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Illuminate\Http\JsonResponse;
use DTApi\Models\Job;
use DTApi\Mailers\MailerInterface;

interface BookingServiceInterface
{
    public function __construct(
                UserRepository $user_repository,
                Job $job_repository,
                MailerInterface $mailer);

}

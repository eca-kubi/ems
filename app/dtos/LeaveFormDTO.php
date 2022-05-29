<?php

use Doctrine\DBAL\Types\Types;
use Spatie\DataTransferObject\DataTransferObject;

class LeaveFormDTO extends DataTransferObject
{
    /**
     * @throws Exception
     */
    public function __construct(
        public DateTimeImmutable|string  | null      $endOfLeave = null,
        public DateTimeImmutable|string   | null   $startOfLeave = null,
        public DateTimeImmutable|string $submissionDate = 'now',
        public string |int | null $id = null,
        public string                        $leaveStatus = 'pending',
        public ?string                       $leavePurpose = '',
        public DateTimeImmutable|string|null $responseDate = 'now'
    )
    {
        if (gettype($endOfLeave) == Types::STRING) {
            $this->endOfLeave = new DateTimeImmutable($endOfLeave);
        }
        if (gettype($startOfLeave) == Types::STRING)
            $this->startOfLeave = new DateTimeImmutable($startOfLeave);

        if (gettype($submissionDate) == Types::STRING)
            $this->submissionDate = new DateTimeImmutable($submissionDate);

        if (gettype($responseDate) == Types::STRING)
            $this->responseDate = new DateTimeImmutable($responseDate);

        $this->id    = (int)$id;
    }
}
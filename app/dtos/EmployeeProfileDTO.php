<?php

class EmployeeProfileDTO extends \Spatie\DataTransferObject\DataTransferObject
{
    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     * @throws UserAlreadyExistsException
     * @throws Exception
     */
    public function __construct(
        public ?string $id='',
        public ?string $firstName='',
        public ?string $lastName='',
        public ?string $email='',
        public ?string $position='',
        public ?string $department='',
        public mixed  $born='',
        public ?string $nationality='',
        public ?string $userType = '',
        public ?string $password = '',
        public ?string $telephone = '',
        public ?string $gender = ''
    )
    {
        parent::__construct();
        $this->born = new DateTimeImmutable($this->born);
        if (UserRepository::instance()->findBy(['email' => $this->email])){
            throw new UserAlreadyExistsException('This email is already registered: ' . $this->email);
        }
    }

}
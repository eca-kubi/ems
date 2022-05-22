<?php

class SessionManager
{
    const SESSION_STARTED = TRUE;
    const SESSION_NOT_STARTED = FALSE;

    /** @var SessionManager|null $this|null  */
    private static ?self $instance = null;

    private bool $sessionState = self::SESSION_NOT_STARTED;


    /**
     * @return SessionManager|null
     */
    public static function getInstance(): ?SessionManager
    {
        if ( !isset(self::$instance))
        {
            self::$instance = new self;
        }

        self::$instance->startSession();

        return self::$instance;
    }

    private function startSession(): void
    {
        if ( $this->sessionState == self::SESSION_NOT_STARTED )
        {
            $this->sessionState = session_start();
        }
    }

    /**
     *    Destroys the current session.
     *
     *    @return    bool    TRUE is session has been deleted, else FALSE.
     **/

    public function destroy(): bool
    {
        if ( $this->sessionState == self::SESSION_STARTED )
        {
            $this->sessionState = !session_destroy();
            unset( $_SESSION );

            return !$this->sessionState;
        }

        return FALSE;
    }

    public function setData(string $key, mixed $value): void
    {

    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $_SESSION;
    }

    /**
     *    Stores data in the session.
     *    Example: $instance->foo = 'bar';
     *
     *    @param string $name    Name of the data.
     *    @param mixed $value    Your data.
     *    @return    void
     **/

    public function set(string $name , mixed $value ): void
    {
        $_SESSION[$name] = $value;
    }


    /**
     *    Gets datas from the session.
     *    Example: echo $instance->foo;
     *
     *    @param string $name   Name of the datas to get.
     *    @return mixed  Data stored in session.
     **/

    public function get(string $name ): mixed
    {
        if ( isset($_SESSION[$name]))
        {
            return $_SESSION[$name];
        }
        return null;
    }


    public function __isset( $name )
    {
        return isset($_SESSION[$name]);
    }


    public function unset( $name ): void
    {
        unset( $_SESSION[$name] );
    }

    public function hasKey(string $name): bool
    {
       return array_key_exists($name, $_SESSION);
    }

}


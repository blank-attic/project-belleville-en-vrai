<?php

class BitwiseFlag
{
    private $flags;

	function __construct($value = 0) {
		$this->flags = $value;
	}

    public function isFlagSet($flag)
    {
        return (($this->flags & $flag) == $flag);
    }

    public function setFlag($flag, $value)
    {
        if($value)
        {
            $this->flags |= $flag;
        }
        else
        {
            $this->flags &= ~$flag;
        }
    }

    public function getValue() {
        return $this->flags;
    }

    public function setFlags($value) {
        $this->flags = $value;
    }
}

?>

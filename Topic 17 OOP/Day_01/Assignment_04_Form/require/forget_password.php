<?php

class ForgetPassword
{
    public $action = NULL;
    public $method = "GET";

    public function set_action($action)
    {
        $this->action = $action;
    }

    public function get_action()
    {
        return $this->action;
    }

    public function set_method($method)
    {
        $this->method = $method;
    }

    public function get_method()
    {
        return $this->method;
    }

    public function forgot_password_form()
    {
?>
        <div align="center">
            <fieldset>
                <legend>Forget Password</legend>
                <form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>">
                    <table>
                        <tr>
                            <th>
                                Enter: <span style="color:red">*</span>
                            </th>
                            <td>
                                <input type="email" name="email" placeholder="Enter Your Email" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <br />
                                <input type="submit" name="confirm" value="confirm" />
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
<?php
    }
}

?>
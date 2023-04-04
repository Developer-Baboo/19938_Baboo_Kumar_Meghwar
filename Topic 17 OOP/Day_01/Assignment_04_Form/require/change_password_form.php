<?php

class ChangePassword
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

    public function change_password_form()
    {
?>
        <div align="center">
            <fieldset>
                <legend>Change Passowrd Here</legend>
                <form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>">
                    <table>
                        <tr>
                            <th>
                                Current Password: <span style="color:red">*</span>
                            </th>
                            <td>
                                <input type="password" name="current_password" placeholder="Enter Your Current Password" />
                            </td>
                        </tr>
                        <tr>
                            <th>
                                New Password: <span style="color:red">*</span>
                            </th>
                            <td>
                                <input type="password" name="new_password" placeholder="Enter Your New Password" />
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Confirm Password: <span style="color:red">*</span>
                            </th>
                            <td>
                                <input type="password" name="confirm_password" placeholder="Enter Your New Password" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <br />
                                <input type="submit" name="change" value="Submit" />
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
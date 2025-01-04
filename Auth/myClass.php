<?php
class Trinee
{
    private $name;
    private $email;
    private $username;
    private $password;

    function __construct($getName, $mail, $user, $getPassword)
    {
        $this->name = $getName;
        $this->email = $mail;
        $this->username = $user;
        $this->password = $getPassword;
    }

    public function combined()
    {
        return $this->name . "," . $this->email . "," . $this->username . "," . $this->password . PHP_EOL;
    }
    public function save()
    {
        file_put_contents('data.txt', $this->combined(), FILE_APPEND);
    }
    public static function display()
    {
        $myInput = file('data.txt');

        echo "
            <table style='margin: 0 auto; padding-bottom: 10; font-size: 1.25rem; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid black; padding: 8px;'>Name</th>
                        <th style='border: 1px solid black; padding: 8px;'>Email</th>
                        <th style='border: 1px solid black; padding: 8px;'>Username</th>
                        <th style='border: 1px solid black; padding: 8px;'>Password</th>
                    </tr>
                </thead>";

        foreach ($myInput as $singleData) {
            list($name, $email, $username, $password) = explode(",", trim($singleData));
            echo
            "<tr>
                    <td style='border: 1px solid black; padding: 8px;'>$name</td>
                    <td style='border: 1px solid black; padding: 8px;'>$email</td>
                    <td style='border: 1px solid black; padding: 8px;'>$username</td>
                    <td style='border: 1px solid black; padding: 8px;'>$password</td>
                </tr>";
        }
        echo "
            </tbody>
        </table>";
    }
}
?>
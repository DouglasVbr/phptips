<?php

namespace Source\Support;

use Exception;
use stdClass;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    /* @var PHPMailer */
    private $mail;

    /* @var stdClass */
    private $data;
    /* @var Exception */
    private $error;

    public function __construct()
    {
        $this->mail = new PHPMailer("true");
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setlanguage("pt_BR");


        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->CharSet = "UTF-8";

        $this->mail->Host = MAIL ["host"];
        $this->mail->Port = MAIL ["port"] ;
        $this->mail->User = MAIL["user"];
        $this->mail->Passwd = MAIL["passwd"]; ;
    }
    public function add( string $subject, string $body, string $recipient_name, string $recipient_email): Email
    {
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;

        return $this;
    }
    public function attachments(string $filePath, string $fileName): Email
    {
        $this->data->attachments[$filePath] = $fileName;
        return $this;
        {
            {
            }
        }

        try {
            $this->mail->Subject = $this->data->subject;
                $this->mail->msgHTML($this->data->body);
                $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
                $this->mail->setFrom($from_email, $from_name);

                if(!empty($this->data->attachments)){
                    foreach ($this->data->attachments as $path => $name){
                        $this->mail->addAttachment($path, $name);
                    }
                }

                $this->mail->send();
                return true;


        } catch (Exception $exception) {
            $this->error = $exception;
            return false;
        }


        }

        public
        function error()
        {
            return $this->error: ?Exception
        }
    }

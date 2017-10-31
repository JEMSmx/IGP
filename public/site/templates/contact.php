<?php  
if($input->post->name && $input->post->email && $input->post->message) {
	$name_user=$sanitizer->name($input->post->name);
		  $email_user=$sanitizer->email($input->post->email);
		  $message_user=$input->post->message;

		$pag=$page->get("1030");
        $mail = wireMail();
        $mail->to($pag->title1);
        $mail->from('no-reply@igpinmobiliaria.com', 'IGP | Inmobiliaria Y Gestión Patrimonial');
        $mail->subject('Mensaje de'.$name_user);
        $mail->bodyHTML("Contacto<br>
			      Nombre: ". $name_user ."<br>
			      Correo: ". $email_user ."<br>
			      Mensaje: ". $message_user ."<br>");
        $send=$mail->send();

        if($send>0)
        	$result=array('result' => true);
      	else
      		$result=array('result' => false);

}else{
	$result=array('result' => false);
}


      echo json_encode($result);
            
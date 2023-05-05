<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\admin_users;
use AppBundle\Entity\doctors;
use AppBundle\Entity\stories;
use AppBundle\Entity\News;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Style\Alignment;
use Symfony\Component\HttpFoundation\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;








class DefaultController extends Controller
{







  /**
   * @Route("/admin", name="admin")
   */
  public function adminAction(Request $request)
  {
    $test = '123';
    $curl = curl_init();


    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ioauth.test.avest.by/oauth/token',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'client_id=su1QrR6lUTOqbwpMwvZu2ghYB9baSXgF&client_secret=cysLe1UWTRPqUqqQLObpAeUKkYOR1nr0&redirect_uri=https%3A%2F%2Ftest-ib.bnb.by%2Foauth2%2Fcallback&grant_type=authorization_code&code=HDqENCcWMe8eWG0q0EcopXMlmxIca7jB1KapUPk0',
      CURLOPT_HTTPHEADER => array(
        'Content-type: application/x-www-form-urlencoded',
        'Authorization: Basic c3UxUXJSNmxVVE9xYndwTXd2WnUyZ2hZQjliYVNYZ0Y6Y3lzTGUxVVdUUlBxVXFxUUxPYnBBZVVLa1lPUjFucjA=',
        'Cookie: __msi_client=ag86a78lakg3ftbr1f7quj6q5d'
      ),
      CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
      CURLOPT_CAPATH => '../src/AppBundle/Controller'
     // CURLOPT_CRLFILE => '../src/AppBundle/Controller/rootca.cer',
    ));

    $response = curl_exec($curl);
    if (curl_errno($curl)) {
      $error_msg = curl_error($curl);
      echo ($error_msg);
    }

    curl_close($curl);
    echo $response;




    // replace this example code with whatever you need
    return $this->render('default/test.html.twig', array(''
      . 'userRole' => $test, ''
      . 'userscrm' => $test));
  }
}

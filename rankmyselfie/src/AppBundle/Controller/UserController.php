<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Document;
use AppBundle\Entity\User;
use AppBundle\Entity\Image;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    

    /**
     * @Route("/registeruser", name="user_register")
     */
    public function registerAction(Request $request)
    {
        $user = new User;
        $form = $this->createFormBuilder($user)
        ->add('gender', ChoiceType::class, array('choices'  => array('Male' => 'M','Female' => 'F', 'style' => 'margin-bottom:15px')))
        ->add('username', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('password', PasswordType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('mail', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
        ->add('datebirth', BirthdayType::class, array('placeholder' => array( 'year' => 'Year', 'month' => 'Month', 'day' => 'Day', 'style' => 'margin-bottom:15px')))
        ->add('save', SubmitType::class, array('label' => 'Register', 'attr' => array('class' =>'form-control', 'style' => 'margin-top:25px')))
        ->getForm();
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $gender = $form['gender']->getData();
            $username = $form['username']->getData();
            $password = $form['password']->getData();
            $mail = $form['mail']->getData();
            $datebirth = $form['datebirth']->getData();
            $now = new\DateTime('now');
            
            
            $user->setUsername($username);
            $user->setPassword($password);
            $user->setMail($mail);
            $user->setTags('');
            $user->setGender($gender);
            $user->setThumburl('');
            $user->setLocation('');
            $user->setTextabout('');
            $user->setCreatedate($now);
            $user->setDatebirth($datebirth);
            $user->setActive(0);
            $user->setViews(0);
            $user->setOnlinestatus(0);
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('notice','Successfully registered...');
            
            return $this->redirectToRoute('homepage');
            
  
        }
        
        // replace this example code with whatever you need
        return $this->render('user/registeruser.html.twig', array('form' => $form->createView()));
    }
    
    

    
    /**
     * @Route("/viewuser/{id}", name="user_view")
     */
    public function viewUserAction($id, Request $request) 
    {
        
     $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
     $images = $this->getDoctrine()
     ->getRepository(Image::class)
     ->findAllImagesByUserID($id);
     

     $user->setViews($user->getViews());
     $user->setUsername($user->getUsername());
     $user->setPassword($user->getPassword());
     $user->setMail($user->getMail());
     $user->setTags($user->getTags());
     $user->setGender($user->getGender());
     $user->setThumburl($user->getThumburl());
     $user->setLocation($user->getLocation());
     $user->setTextabout($user->getTextabout());
     $user->setDatebirth($user->getDatebirth());
     $user->setViews($user->getViews());
    // $user = $this->getDoctrine()
    // ->getRepository(User::class)
    // ->updateProfileViews($id, $user->getViews());
 
     
       
        // replace this example code with whatever you need
     return $this->render('user/viewuser.html.twig', array('user'=>$user, 'images'=>$images));
    } 
    
       
  
    /**
     * @Route("/edituser/{id}", name="user_edit")
     */
    public function editUserAction($id, Request $request)
    {
        
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
      $images = $this->getDoctrine()
      ->getRepository(Image::class)
      ->findAllImagesByUserID($id);
      
      $user->setUsername($user->getUsername());
      $user->setPassword($user->getPassword());
      $user->setMail($user->getMail());
      $user->setTags($user->getTags());
      $user->setGender($user->getGender());
      $user->setThumburl($user->getThumburl());
      $user->setLocation($user->getLocation());
      $user->setTextabout($user->getTextabout());
      $user->setDatebirth($user->getDatebirth());
      
      $form = $this->createFormBuilder($user)
      ->add('username', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->add('password', PasswordType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->add('location', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->add('textabout', TextareaType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->add('mail', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->add('thumburl', TextType::class, array('attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Save changes', 'attr' => array('class' =>'form-control', 'style' => 'margin-bottom:15px')))
      ->getForm();
      
      $form->handleRequest($request);
      
      if($form->isSubmitted() && $form->isValid()){
          
          $username = $form['username']->getData();
          $password = $form['password']->getData();
          $location = $form['location']->getData();
          $textabout = $form['textabout']->getData();
          $mail = $form['mail']->getData();
          $password = $form['password']->getData();
          $thumburl = $form['thumburl']->getData();
          
          $now = new\DateTime('now');
          
          $user->setUsername($username);
          $user->setPassword($password);
          $user->setMail($mail);
          $user->setTags('');
          $user->setThumburl($thumburl);
          $user->setLocation($location);
          $user->setTextabout($textabout);
          $user->setCreatedate($now);
          $user->setActive(0);
          
          
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();
          
          $this->addFlash('notice','Successfully edited...');          

          return $this->redirectToRoute('homepage');
          
          
      }

        // replace this example code with whatever you need
        return $this->render('user/edituser.html.twig',array('form'=>$form->createView(), 'user'=>$user, 'images'=>$images));
    }
    

    /**
     * @Route("/uploadimage/{id}", name="image_upload")
     */
    public function uploadImageAction($id, Request $request) {
        if ($request->getMethod() == 'POST') {
            $image = $request->files->get('img');

            $status = 'success';
            $uploadedURL='';
            $message='';
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        
                        //Start Uploading File
                        $document = new Document();
                        $document->setFile($image);
                        $document->setSubDirectory($id);
                        $document->processFile();
                        $uploadedURL=  $document->getSubDirectory() . DIRECTORY_SEPARATOR . $image->getBasename();
                        
                        
                    } else {
                        $status = 'failed';
                        $message = 'Invalid File Type';
                    }
                } else {
                    $status = 'failed';
                    $message = 'Size exceeds limit';
                }
            } else {
                $status = 'failed';
                $message = 'File Error';
            }
            
            
           //write Image to Database
            $image = new Image;
            $image->setUserid($id);
            $image->setUrlfolder($uploadedURL);
            $image->setPictitel('');
            $image->setPicdesc('');
            $image->setVotes(0);
            $image->setV1(0);
            $image->setV2(0);
            $image->setV3(0);
            $image->setV4(0);
            $image->setV5(0);
            $image->setV6(0);
            $image->setV7(0);
            $image->setV8(0);
            $image->setV9(0);
            $image->setV10(0);

            
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();
            
            $this->addFlash('notice','Successfully added Image...');
            
            
            

            return $this->editUserAction($id, $request);
            
        } else {
            
            return $this->editUserAction($id, $request);
        }
    }
    
    
    /**
     * @Route("/loginuser", name="user_login")
     */
    public function loginUserAction(Request $request)
    {
        $user=$token->getUser();
        
        $em=$this->container->get('doctrine.orm.entity_manager');
        
        $em->persist($user);
        $em->flush();
        
        return $this->httpUtils->createRedirectResponse($request, $this->determineTargetUrl($request));
    }
    
   

    
    
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Image;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ImageController extends Controller
{
    /**
     * @Route("/deleteimage/{id}/{imageid}", name="image_delete")
     */
    public function deleteImageAction(Request $request, $id, $imageid)
    {
        $image = $this->getDoctrine()
        ->getRepository(Image::class)
        ->deleteImageByUseridandImageId($id,$imageid);
        if(!$image){
            
            die('ne valja');
        }
       
        
        $response = $this->forward('AppBundle:User:editUser', array(
            'id'  => $id,
            'request' => $request,
        ));
        
        return $response;
        
        
    }
    
    /**
     * @Route("/saveimage/{id}/{imageid}", name="image_save")
     */
    public function saveImageAction(Request $request, $id, $imageid)
    {

      
        $data = $request->get('json');
        
        $picdata = json_decode($data);
       
        
        $image = $this->getDoctrine()
        ->getRepository(Image::class)
        ->saveImageByUseridandImageId($id, $imageid,  $picdata[0], $data);
       
        if(!$image){
            
            die('ne valja');
        }
        
 
        $response = $this->forward('AppBundle:User:editUser', array(
            'id'  => $id,
            'request' => $request,
        ));
        
        return $response;
        
        
    }
    
    
    
    
}

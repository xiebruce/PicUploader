<?php
require_once "../core/Logger.php";
class PUnit{
	function assertEquals($value,$expected,$info = NULL){
		if($value != $expected){
			throw new Exception($info." expected ".$expected." but ".$value);
		}
	}
	function run($torun = NULL){
   		$r = new ReflectionClass($this);
    	foreach($r->getMethods() as $key=>$methodObj){
      	  if($methodObj->isPrivate())
           		 $methods[$key]['type'] = 'private';
        	elseif($methodObj->isProtected())
        	     $methods[$key]['type'] = 'protected';
      		else
           		 $methods[$key]['type'] = 'public';
        	$methods[$key]['name'] = $methodObj->name;
       		$methods[$key]['class'] = $methodObj->class;
       	}
        $before = NULL;
        $after = NULL;
        foreach ($methods as $method) {
          if($method["class"] != "PUnit"&&$method["name"] == "before"){
            $before = $method;
          }
          if($method["class"] != "PUnit"&&$method["name"] == "after"){
            $after = $method;
          }
        }
       	$error = array();
       	$success = array();
       	foreach ($methods as $method) {
       		if($method["class"] != "PUnit"&&substr($method["name"],0,4) == "test"){
            if($torun !== NULL){
              if(!in_array($method["name"],$torun))
                continue;
            }
       			try{
       				if($method["type"] == "public"){
                $log = new Logger();
                $log->info("Run unit --->".$method["name"]);
                if($before!=NULL)
                  $this->$before["name"]();
       					$this->$method["name"]();
       					array_push($success,$method["name"]);
       				}
       			}catch(Exception $e){
       				$error[$method["name"]]="".$e;
       			}
       		}
       	}
       	echo "\r\nPHP Unit-----------error"."\r\n";
       	print_r($error);
        echo "PHP Unit-----------result"."\r\n";
        echo "total:".(count($success)+count($error)).",success:".count($success).",error:".count($error)."\r\n";

	}
}
?>
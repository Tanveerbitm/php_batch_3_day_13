<?php


namespace App\classes;

class Series
{
    private $firstNumber;
    private $secondNumber;
    private $result = '';
    private $msg = '';
    private $odd_even;

    public function index()
    {
        header('location:pages/index.php');
    }

    public function __construct($data)
    {
//        if ($data['first_number'] != '' && $data['second_number'] != '' && $data['odd_even'] != '') {
//            $this->firstNumber = (int)$data['first_number'];
//            $this->secondNumber = (int)$data['second_number'];
//            $this->odd_even = (int)$data['odd_even'];
//            if ($this->firstNumber > $this->secondNumber) {
//
//                    if($this->odd_even == 1){
//                        $this->msg = 'printing reverse order';
//                        for ($i = $this->firstNumber; $i >= $this->secondNumber; $i--) {
//                            if( ($i%2)!=0 ){
//                            $this->result .= (string)$i.', ';}
//                        }
//                    }else{
//                        $this->msg = 'printing reverse order';
//                        for ($i = $this->firstNumber; $i >= $this->secondNumber; $i--) {
//                            if( ($i%2)==0 ){
//                                $this->result .= (string)$i.', ';}
//                        }
//                    }
//
//            } else {
//
//                if($this->odd_even == 1){
//
//                    $this->msg = 'printing forward order';
//                    for ($i = $this->firstNumber; $i <= $this->secondNumber; $i++) {
//                        if( ($i%2)!=0 ){
//                            $this->result .= (string)$i.', ';}
//                    }
//                }else{
//                    $this->msg = 'printing forward order';
//                    for ($i = $this->firstNumber; $i <= $this->secondNumber; $i++) {
//                        if( ($i%2)==0 ){
//                            $this->result .= (string)$i.', ';}
//                    }
//                }
//
//            }
//
//        } else {
//            $this->result = '';
//            $this->msg = 'Enter Number';
//        }


    }


    public function getResult(){
        return $this->result;
    }
    public function getMessage(){
        return $this->msg;
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class Game extends Controller
{
    //
    public function postGame(Request $request)
    {
        $id = Auth::id();
        $human = -1;
        // Set up the values for the game...
        // 0 is even, 1 is Odd
        $names = array('even', 'odd');
        if(isset($request["human"])){
        $human = is_numeric($request["human"]) ? $request['human'] : -1;
        }
        $humanOdd = isset($request["odd"]) ? $request['odd']+0 : -1;
        $computer = 0; // Hard code the computer to odd

        $Hnumber = $human;
        if($Hnumber == -1){
            $Hnumber = '...';
        }
        $computer = rand(0,99);
        $computerOdd = rand(0,1);
        $number = $computer + $human;

        $result = $this->check($computer, $human, $computerOdd, $humanOdd, $number);

        if ( $human == -1 || $humanOdd == -1 ) {
            $mss = "Please select a number type and press Play.\n";
        } else {
            $mss =  "Your Play=$names[$humanOdd] Computer Play=$names[$computerOdd] and $computer\n 
        Result= $number  $result\n";

        
        $ans = array(
            'computer'    => $computer,
            'human'  => $human,
            'comuterOdd'  => $computerOdd,
            'humanOdd' => $humanOdd,
            'number' => $number,
            'result' => $result,
            'mss' => $mss,
        );
        
        $update['last_mss'] = $mss;
        User::updateMss($id, $update);
        return \view('home.game')->with('mss', $mss);
    }
    }
    function check($computer, $human, $computerOdd, $humanOdd, $number) {
        // For now this is a rock-savant checking function
        // TODO: Fix this
        
        if ($humanOdd == $computerOdd) {
            if($number%2==0 && $humanOdd == 0 || $number%2!=0 && $humanOdd == 1 ){
                return "You both win";
            }else{
                return "You both loose";
            }
        } else if($humanOdd == 1){
            if($number%2 == 0){
                return "Your loose, computer wins";
            }else{
                return "You win, computer looses";
            }
        } else{
            if($number%2 == 0){
                return "You win, computer looses";
            }else{
                return "You loose, computer wins";
            }
        }
        return false;
    }
}
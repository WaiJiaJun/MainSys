<?php

namespace App\Http\Controllers;

use App\Models\Generator;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $records=Generator::all();
        return view('generator.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params0 = request('name');       // pass from entered company name
        $filePath="C:\Users\jiaju\Desktop\LiannFYP\\".$params0;
        exec("C:\Users\jiaju\Desktop\LiannFYP\copy.bat $filePath", $output);
        // print_r($output);    //to see batch program content

        // future enhancement
        // add handling if copy.bat is failed then throw error
        // check if company name is exist (duplicate company name validation)
        $domain = "flexi.com.".$params0;
        $data="\n\n<VirtualHost ".$domain.">";
        $data1="DocumentRoot \"".$filePath."\public\"";
        $data2="ServerName ".$domain;
        $data3="</VirtualHost>";
        $filecontent=file_get_contents('C:\xampp\apache\conf\extra\httpd-vhosts.conf');
        $filecontent=$filecontent.$data."\n\t".$data1."\n\t".$data2."\n".$data3;
        file_put_contents('C:\xampp\apache\conf\extra\httpd-vhosts.conf', $filecontent);

        $data="\n\t127.0.0.1\t\t".$domain;
        $filecontent=file_get_contents('C:\Windows\System32\drivers\etc\hosts');
        $filecontent=$filecontent.$data;
        file_put_contents('C:\Windows\System32\drivers\etc\hosts', $filecontent);

        $url = "http://".$domain;
        // exec("C:/xampp/restart.bat $domain", $output);
        $this->stop();
        $this->start();
        return redirect()->to($url);
        // print_r($output);
        // $handle = popen ('start /B C:/Users/jiaju/Desktop/LiannFYP/restart.bat > C:\Users\jiaju\Desktop\LiannFYP\restart_TS3.log 2>&1', 'r');
        // pclose ($handle);
    }

    public function start()
    {
        exec("C:/xampp/apache_start.bat", $output);
        print_r($output);
    }

    public function stop()
    {
        exec("C:/xampp/apache_stop.bat", $output);
        print_r($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function show(Generator $generator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function edit(Generator $generator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generator $generator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generator $generator)
    {
        //
    }
}

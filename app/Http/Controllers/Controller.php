<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Sparqllib;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        include(app_path() . '\functions\Sparqllib.php');
        $test = "";
            if (isset($_GET['search'])) {
                $test = $_GET['search'];
                $data = sparql_get(
                    "http://localhost:3030/final-semweb",
                    "PREFIX : <http://www.semanticweb.org/mf/ontologies/2022/4/player#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX xml: <http://www.w3.org/XML/1998/namespace>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    BASE <http://www.semanticweb.org/mf/ontologies/2022/4/player>
                        
                    SELECT *
                    WHERE {
                    ?x :nama ?nama .
                    ?x :domisili ?domisili .
                    ?x :posisi ?posisi .
                    ?x :nomor_punggung ?nomor_punggung .
                    ?x :nama_jersey ?nama_jersey .
                    ?x :nomor_hp ?nomor_hp .
                    ?x :tanggal_lahir ?tanggal_lahir .
                    ?x :tempat_lahir ?tempat_lahir .
                    ?x :player_in ?player_in .

                        FILTER 
                        (regex (?nama, '$test', 'i') 
                        || regex (?domisili, '$test', 'i') 
                        || regex (?posisi, '$test', 'i') 
                        || regex (?nama_jersey, '$test', 'i') 
                        || regex (?nomor_hp, '$test', 'i')
                        || regex (?team, '$test', 'i'))
                        }"
                );
            }elseif (isset($_GET['searchposisi'])) {
                $test = $_GET['searchposisi'];
                $data = sparql_get(
                    "http://localhost:3030/final-semweb",
                    "PREFIX : <http://www.semanticweb.org/mf/ontologies/2022/4/player#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX xml: <http://www.w3.org/XML/1998/namespace>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    BASE <http://www.semanticweb.org/mf/ontologies/2022/4/player>
                        
                    SELECT *
                    WHERE {
                    ?x :nama ?nama .
                    ?x :domisili ?domisili .
                    ?x :posisi ?posisi .
                    ?x :nomor_punggung ?nomor_punggung .
                    ?x :nama_jersey ?nama_jersey .
                    ?x :nomor_hp ?nomor_hp .
                    ?x :tanggal_lahir ?tanggal_lahir .
                    ?x :tempat_lahir ?tempat_lahir .
                    ?x :player_in ?player_in .
                    FILTER 
                        (regex (?posisi, '$test', 'i'))
                        }
                    "
                );
            }elseif (isset($_GET['searchdomisili'])) {
                $test = $_GET['searchdomisili'];
                $data = sparql_get(
                    "http://localhost:3030/final-semweb",
                    "PREFIX : <http://www.semanticweb.org/mf/ontologies/2022/4/player#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX xml: <http://www.w3.org/XML/1998/namespace>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    BASE <http://www.semanticweb.org/mf/ontologies/2022/4/player>
                        
                    SELECT *
                    WHERE {
                    ?x :nama ?nama .
                    ?x :domisili ?domisili .
                    ?x :posisi ?posisi .
                    ?x :nomor_punggung ?nomor_punggung .
                    ?x :nama_jersey ?nama_jersey .
                    ?x :nomor_hp ?nomor_hp .
                    ?x :tanggal_lahir ?tanggal_lahir .
                    ?x :tempat_lahir ?tempat_lahir .
                    ?x :player_in ?player_in .
                    FILTER 
                        (regex (?domisili, '$test', 'i'))
                        }
                    "
                );
            }elseif (isset($_GET['searchteam'])) {
                $test = $_GET['searchteam'];
                $data = sparql_get(
                    "http://localhost:3030/final-semweb",
                    "PREFIX : <http://www.semanticweb.org/mf/ontologies/2022/4/player#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX xml: <http://www.w3.org/XML/1998/namespace>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    BASE <http://www.semanticweb.org/mf/ontologies/2022/4/player>
                        
                    SELECT *
                    WHERE {
                    ?x :nama ?nama .
                    ?x :domisili ?domisili .
                    ?x :posisi ?posisi .
                    ?x :nomor_punggung ?nomor_punggung .
                    ?x :nama_jersey ?nama_jersey .
                    ?x :nomor_hp ?nomor_hp .
                    ?x :tanggal_lahir ?tanggal_lahir .
                    ?x :tempat_lahir ?tempat_lahir .
                    ?x :player_in ?player_in .
                    ?x :player_in :$test .
                    }
                    "
                );
            }else {
                $data = sparql_get(
                    "http://localhost:3030/final-semweb",
                    "PREFIX : <http://www.semanticweb.org/mf/ontologies/2022/4/player#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX xml: <http://www.w3.org/XML/1998/namespace>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    BASE <http://www.semanticweb.org/mf/ontologies/2022/4/player>
                        
                    SELECT *
                    WHERE {
                    ?x :nama ?nama .
                    ?x :domisili ?domisili .
                    ?x :posisi ?posisi .
                    ?x :nomor_punggung ?nomor_punggung .
                    ?x :nama_jersey ?nama_jersey .
                    ?x :nomor_hp ?nomor_hp .
                    ?x :tanggal_lahir ?tanggal_lahir .
                    ?x :tempat_lahir ?tempat_lahir .
                    ?x :player_in ?player_in .
                    }

                    ORDER BY ASC (?nama)
                "
                );
            }
    
            if (!isset($data)) {
                print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
            }
        return view('welcome', ['test'=>$test, 'data'=>$data]);
    }
}

<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    if($_SERVER['REQUEST_METHOD'] = 'GET') {
        $elem = ".revresbo enol eht ,snoitatiseh yna evah regnol on I
        ecived siht htiw emit taehc I yhw si taht roF
        .rehtegot eb dluow ew syad gninihs eht fO
        sedarmoc ym ot esimorp eht kaerb reven tsum I
         
        etaG eht ot gnikcaH
        ,worromot setagen hcihw eciohc a ekaM
        ,emit fo egassap sselicrem eht si edutiniF
        .su ot nwohs seitrebil lautriv tub erA
        yks tnatsid eht dna evol etinifnI
         
        .seiroeht hsidlihc nwod yal uoY
        ,puorg hsiloof a fo gnik eht sa gnitcA
        .uoy esuma ot hguone ton erA
        sfoorp sselgninaem dna efil fo smialC
         
        .revresbo enol eht ,em flugne
        niaga ecno lliw ssendas tuohtiw pool emit a ,os dnA
        .sruoy fo elims taht tcetorp ot tnaw I esuaceB
        ,dnoces yreve sdlrow neewteb ssorc I won oS
         
        etaG eht ot gnikcaH
        ,eciohc dna ynitsed leurc a drawoT
        wohs sdnah kcolc htob tahw si edutiniF
        .su ot dewolla segelivirp niav tub erA
        su erofeb serutuf dna smaerd etinifni ehT
         
        .ekatsim tsethgils eht neve wolla ton seod noitanimretederP
        ,erutuf eht revo gnitnemal ro tsap eht ni deppart er’ew rehtehW
        iccuLsi13manym0ll3h : si drowssap eht .tnacifingisni tub uoy ot gnihton erA
        dlrow eht ni staebtraeh fo snoillib eht nevE";
        echo json_encode($elem);
        http_response_code(200);
    } else {
        http_response_code(405);
        echo json_encode(["message" => "Method Not Allowed"]);
    }
?>
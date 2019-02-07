<?php
    namespace realtime\kyc\Http\Controller;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use realtime\kyc\Models\Kyc;

    class KycController extends Controller {
        function __construct() {

}

        public function index()
        {
            $data=Kyc::select("name")->get();
           return view('kyc::kyc',  compact("data"));
        }

        public function sendMail(Request $request)
        {
            ContactForm::create($request->all());

            return redirect(route('contact'));
        }


    }
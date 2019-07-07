
 $validater = $this->validate($request,[
            'first_name' => 'required|regex:/^[a-zA-Z]+$/|max:255',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'phone' => 'required|regex:/[0-9]/|min:11|max:11',
            'department_id' => 'required',
            'designation' => 'required',
            'salary' => 'required|regex:/[0-9]/',
            'reg' => 'required',
            'type' => 'required',
        ]);

        if($validater){
            return redirect('http://localhost:8080/wasa/public/registered')->withErrors($validater); 
        }
        
        else{
            $a->save();
            
            Session::flash('message', "Successfully registered");
            
            return redirect('http://localhost:8080/wasa/public/registered/create');
        }

<script>

alert("THANKS FOR BUYING");

</script>  

{!! Form::open(['action' => 'ComplainController@home','method'=>'post']) !!}


<div class="container">
  <div class="row">
    <div class="col text-center">
      <button href="http://localhost:8080/wasa/public/home" class="btn btn-primary">Back Home</button>
    </div>
  </div>
</div>

        
{!! Form::close() !!}




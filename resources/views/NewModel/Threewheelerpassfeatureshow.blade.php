@include('admin_header')
<div class="content-wrapper">
{{--  create new starts --}}
            <div class="container-fluid">
                <h1>3W Pass </h1>
                <br>
                <br>
                <div class="table_section">
                    <table>
                        <thead style="background-color:#fff">
                        <tr>
                            <th>Feature Name</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tbody>
                                <tr>
                                   <td>{{$user->Feature_Name}}</td>
                                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
                                                                                 $val = str_replace("(","_",$val);
                                                                                 $val = str_replace(")","_",$val);
                                                                                $val = str_replace("{","_",$val);
                                                                                $val = str_replace("}","_",$val);
                                                                                $val = str_replace("[","_",$val);
                                                                                $val = str_replace("]","_",$val);
                                                                                $val = str_replace("'","_",$val);
                                                                                $val = str_replace("%","_",$val);
                                                                                $val = str_replace("?","_",$val);
                                                                                $val = str_replace("!","_",$val);
                                                                                $val = str_replace("*","_",$val);
                                                                                $val = str_replace("<","_",$val);
                                                                                $val = str_replace(">","_",$val);
                                                                                $val = str_replace("#","_",$val);
                                                                                $val = str_replace("~","_",$val);  
                                                                                $val = str_replace(":","_",$val);
                                                                                $val = str_replace(";","_",$val);
                                                                                $val = str_replace(",","_",$val);
                                                                                $val = str_replace("+","_",$val);
                                                                                $val = str_replace("$","_",$val);
                                                                                $val = str_replace("^","_",$val);
                                                                                $val = str_replace("`","_",$val);
                                                                                 $idf = session()->get('ida');
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "SELECT * FROM threewheelerpassfeatures WHERE id='$idf'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                       @endphp
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
              </form> 
        </div>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
    </section>

{{--  create new  ends --}}

</div>

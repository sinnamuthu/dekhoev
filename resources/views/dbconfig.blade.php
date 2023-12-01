 @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                                                            $idf = session()->get('ida');
                                                                            if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    
                                       @endphp
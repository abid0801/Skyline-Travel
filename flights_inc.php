<?php
if(isset($_POST['submit'])){
          $from_airport = $_POST['flight_from'];
          $to_airport = $_POST['to_airport'];
          $to_date = $_POST['to_date'];
          $sql = "CREATE FUNCTION get_distance(source varchar(6), dest varchar(6)){
                  returns integer
                    declare a integer;
                    declare b integer;
                    declare total integer;
                  BEGIN
                    SELECT distance into a FROM airports WHERE airports.airport_id=source;
                    SELECT distance into b FROM airports WHERE airports.airport_id=dest;
                    total=a-b;
                    if(total<0)
                      total=total*(-1);
                    return total;
                  END;
                }

          SELECT flight_id, source_id, d_date, dest_id, a_date, get_distance(source_id, dest_id), model, e_seats, b_seats,p.first_name FROM flights AS f, aeroplanes AS a,pilots as p WHERE source_id='$from_airport' AND dest_id='$to_airport' AND d_date='$to_date' AND f.aeroplane_reg=a.reg_number AND p.flight_id=f.flight_id;";
          $result = $conn-> query($sql);
}
?>
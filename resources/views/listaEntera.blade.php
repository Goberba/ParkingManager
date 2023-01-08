
<div class="card m-2" style ="width :40rem;" >
<div class="card-header">Coches Actuales</div>
    <table class="table table-stripped">
        <thead >
            <tr>
                <th class="text-center">Coche</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
           
            @each('parcial',$coches,'coche')
            
        </tbody>
    </table>
  
    
    </div>



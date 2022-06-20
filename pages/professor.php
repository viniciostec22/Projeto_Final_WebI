<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Professores</h6>
            <table id="professores" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Disciplina</th>
                  <th>Semestre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiago Nogueira</td>
                  <td>Desenvolvimento Web</td>
                  <td>3° Semestre</td>
                </tr>
                ...
              </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#professores').DataTable();
    });    
</script>
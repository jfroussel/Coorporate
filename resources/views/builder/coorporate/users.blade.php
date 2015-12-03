@extends('app')

@section('content')
@include('sidebar')


<div class="container" style="padding-top: 50px">
<div class="card">
    <div class="card-header bgm-bluegray" style="color:#fff">
    <i class="fa fa-users fa-3x"></i>
        <h2>Gestion des utilisateurs <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
        <ul class="actions">
             <li>
                 <a href="">
                     <i class="zmdi zmdi-refresh-alt"></i>
                 </a>
             </li>
             <li>
                 <a href="">
                     <i class="zmdi zmdi-download"></i>
                 </a>
             </li>
             <li class="dropdown">
                 <a href="" data-toggle="dropdown">
                     <i class="zmdi zmdi-more-red"></i>
                 </a>

                 <ul class="dropdown-menu dropdown-menu-right">
                     <li>
                         <a href="">Change Date Range</a>
                     </li>
                     <li>
                         <a href="">Change Graph Type</a>
                     </li>
                     <li>
                         <a href="">Other Settings</a>
                     </li>
                 </ul>
             </li>
         </ul>

         <button class="btn bgm-red btn-float"><i class="zmdi zmdi-plus"></i></button>

    </div>
     
    <table id="data-table-command" class="table table-striped table-vmiddle">
        <thead>
            <tr>
                <th data-column-id="id" data-type="numeric">ID</th>
                <th data-column-id="name">Name</th>
                <th data-column-id="email" data-order="desc">Email</th>
                <th data-column-id="status" data-order="desc">Actif depuis le:</th>
                <th data-column-id="options" data-formatter="commands" data-sortable="false">Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10238</td>
                <td>Roussel jeff</td>
                <td>eduardo@pingpong.com</td>
                <td>14.10.2013</td>
            </tr>
            <tr>
                <td>10243</td>
                <td>Roussel jeff</td>
                <td>eduardo@pingpong.com</td>
                <td>19.10.2013</td>
            </tr>
            <tr>
                <td>10248</td>
                <td>Roussel jeff</td>
                <td>eduardo@pingpong.com</td>
                <td>24.10.2013</td>
            </tr>

            <tr>
                <td>10244</td>
                <td>Roussel jeff</td>
                <td>lila@google.com</td>
                <td>20.10.2013</td>
            </tr>
            <tr>
                <td>10249</td>
                <td>lila@google.com</td>
                <td>25.10.2013</td>
            </tr>
            <tr>
                <td>10237</td>
                <td>Roussel jeff</td>
                <td>robert@bingo.com</td>
                <td>13.10.2013</td>
            </tr>

            <tr>
                <td>10241</td>
                <td>Roussel jeff</td>
                <td>simon@yahoo.com</td>
                <td>17.10.2013</td>
            </tr>
            <tr>
                <td>10246</td>
                <td>Roussel jeff</td>
                <td>simon@yahoo.com</td>
                <td>22.10.2013</td>
            </tr>

        </tbody>
    </table>
</div>



</div>

@endsection
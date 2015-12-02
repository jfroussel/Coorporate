<div class="container-fluid">
    <div class="block-header">


        <ul class="actions">
            <li>
                <a href="">
                    <i class="zmdi zmdi-trending-up"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="zmdi zmdi-check-all"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="">Rafraichir</a>
                    </li>
                    <li>
                        <a href="">Manage Widgets</a>
                    </li>
                    <li>
                        <a href="">Parametres</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Liste des clients <small>Clients actifs au 30/11/2015.</small></h2>
        </div>

        <div id="data-table-command-header" class="bootgrid-header container-fluid">
        <div class="row">
        <div class="col-sm-12 actionBar">
        <div class="search form-group"><div class="input-group"><span class="zmdi icon input-group-addon glyphicon-search"></span> <input type="text" class="search-field form-control" placeholder="Search"></div></div><div class="actions btn-group"><div class="dropdown btn-group"><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="dropdown-text">10</span> <span class="caret"></span></button><ul class="dropdown-menu pull-right" role="menu"><li class="active" aria-selected="true"><a href="#10" class="dropdown-item dropdown-item-button">10</a></li><li aria-selected="false"><a href="#25" class="dropdown-item dropdown-item-button">25</a></li><li aria-selected="false"><a href="#50" class="dropdown-item dropdown-item-button">50</a></li><li aria-selected="false"><a href="#-1" class="dropdown-item dropdown-item-button">All</a></li></ul></div><div class="dropdown btn-group"><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="dropdown-text"><span class="zmdi icon zmdi-view-module"></span></span> <span class="caret"></span></button><ul class="dropdown-menu pull-right" role="menu"><li><div class="checkbox"><label class="dropdown-item"><input name="id" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> ID</label></div></li><li><div class="checkbox"><label class="dropdown-item"><input name="sender" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> Sender</label></div></li><li><div class="checkbox"><label class="dropdown-item"><input name="received" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> Received</label></div></li><li><div class="checkbox"><label class="dropdown-item"><input name="commands" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> Commands</label></div></li></ul></div></div></div></div></div><table id="data-table-command" class="table table-striped table-vmiddle bootgrid-table" aria-busy="false">
            <thead>
                <tr><th data-column-id="id" class="text-left"><a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">ID</span><span class="zmdi icon "></span></a></th><th data-column-id="sender" class="text-left"><a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">Sender</span><span class="zmdi icon "></span></a></th><th data-column-id="received" class="text-left"><a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">Received</span><span class="zmdi icon zmdi-expand-more"></span></a></th><th data-column-id="commands" class="text-left"><a href="javascript:void(0);" class="column-header-anchor "><span class="text">Commands</span><span class="zmdi icon "></span></a></th></tr>
            </thead>
            <tbody><tr data-row-id="0"><td class="text-left">10253</td><td class="text-left">eduardo@pingpong.com</td><td class="text-left">29.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10253"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10253"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="1"><td class="text-left">10252</td><td class="text-left">robert@bingo.com</td><td class="text-left">28.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10252"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10252"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="2"><td class="text-left">10251</td><td class="text-left">simon@yahoo.com</td><td class="text-left">27.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10251"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10251"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="3"><td class="text-left">10250</td><td class="text-left">tim@microsoft.com</td><td class="text-left">26.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10250"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10250"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="4"><td class="text-left">10249</td><td class="text-left">lila@google.com</td><td class="text-left">25.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10249"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10249"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="5"><td class="text-left">10248</td><td class="text-left">eduardo@pingpong.com</td><td class="text-left">24.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10248"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10248"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="6"><td class="text-left">10247</td><td class="text-left">robert@bingo.com</td><td class="text-left">23.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10247"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10247"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="7"><td class="text-left">10246</td><td class="text-left">simon@yahoo.com</td><td class="text-left">22.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10246"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10246"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="8"><td class="text-left">10245</td><td class="text-left">tim@microsoft.com</td><td class="text-left">21.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10245"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10245"><span class="zmdi zmdi-delete"></span></button></td></tr><tr data-row-id="9"><td class="text-left">10244</td><td class="text-left">lila@google.com</td><td class="text-left">20.10.2013</td><td class="text-left"><button type="button" class="btn btn-icon command-edit" data-row-id="10244"><span class="zmdi zmdi-edit"></span></button> <button type="button" class="btn btn-icon command-delete" data-row-id="10244"><span class="zmdi zmdi-delete"></span></button></td></tr></tbody>
        </table><div id="data-table-command-footer" class="bootgrid-footer container-fluid"><div class="row"><div class="col-sm-6"><ul class="pagination"><li class="first disabled" aria-disabled="true"><a href="#first" class="button"><i class="zmdi zmdi-more-horiz"></i></a></li><li class="prev disabled" aria-disabled="true"><a href="#prev" class="button"><i class="zmdi zmdi-chevron-left"></i></a></li><li class="page-1 active" aria-disabled="false" aria-selected="true"><a href="#1" class="button">1</a></li><li class="page-2" aria-disabled="false" aria-selected="false"><a href="#2" class="button">2</a></li><li class="next" aria-disabled="false"><a href="#next" class="button"><i class="zmdi zmdi-chevron-right"></i></a></li><li class="last" aria-disabled="false"><a href="#last" class="button"><i class="zmdi zmdi-more-horiz"><i></i></i></a></li></ul></div><div class="col-sm-6 infoBar"><div class="infos">Showing 1 to 10 of 20 entries</div></div></div></div>
    </div>




</div>

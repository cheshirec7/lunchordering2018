@include('reports.header')<body><div id="thereport">    <img class="logoimg" src="{{ asset('img/logo_orig.png') }}">    <h2>{!! $title !!}</h2>    <p><i class="date">as of {!! date('l, F jS, Y h:i:s A') !!}</i></p>    <input type="button" onClick="window.print()" value="Print"/>    <div class="reportbody">        <h3>Payments Received {!! $thedate->format('l, F jS, Y') !!}</h3>        <table>            <tr>                <th style="width: 250px;">Account</th>                <th style="text-align:right;width: 100px;">Credit Amount</th>                <th style="padding-left: 30px;">Description</th>            </tr>            @foreach($items as $item)                <tr>                    <td>{!! $item->account_name !!}</td>                    <td style="text-align:right;">{!! money_format('$%.2n', $item->credit_amt / 100) !!}</td>                    <td style="padding-left: 30px;">{!! $item->credit_desc !!}</td>                </tr>            @endforeach        </table>    </div></div></body>
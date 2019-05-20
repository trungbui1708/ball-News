@extends('index.layout.index')
@section('content')
-->
 <div class="rs-point-table sec-spacer">
            <div class="container">
              <h1>Laliga</h1>
                <div class="tab-content">
                    <div id="sfl" class="tab-pane fade in active">
                        <table> 
                            <tr>
                                <td class="team-name">Club</td>
                                <td>Match</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            @foreach($rank as $key)
                            <tr>
                                <td class="team-name" style="font-weight: bold">{{$key->clubs->name}}</td>
                                <td>{{$key->number_match}}</td>
                                <td>{{$key->won}}</td>
                                <td>{{$key->draw}}</td>
                                <td>{{$key->lost}}</td>
                                <td>{{$key->goals_for}}</td>
                                <td>{{$key->goals_against}}</td>
                                <td>{{$key->goals_difference}}</td>
                                <td>{{$key->point}}</td>
                            </tr>
                            @endforeach                
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
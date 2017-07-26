 <!DOCTYPE html>
 <header>
   

 </header>
 <body>
   
 
  @foreach($quotes as $quote)
                               
                              
                                <tr>
                                  <td>
                                  
                                  </td>
                                  <td>
                                    {{ $quote->name_client }}
                                  </td>
                                  <td>
                                     {{ $quote->Quotename }}
                                  </td>
                                  <td>
                                   {{ $quote->amount }}
                                  </td>
                                  <td>
                                     {{ $quote->Vdate }}
                                  </td>
                                  <td>
                                 {{ $quote->status }}
                                  </td>
                                                                  </tr>
                                @endforeach

  </body>

</html>
                                
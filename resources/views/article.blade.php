@extends ('template1')

@section ('titre')
  Articles
@endsection

@section ('h1')
  Ceci est l'article numéro {{ $numero }}
@endsection

@section ('body')
  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed laoreet nisl. Curabitur ultricies porttitor aliquam. Praesent tempus suscipit auctor. Donec commodo euismod suscipit. Vestibulum non diam sollicitudin, porttitor lectus vitae, iaculis est. Suspendisse eget neque finibus, dapibus dui ac, posuere lorem. Cras fermentum vulputate massa, ac efficitur diam interdum sed.</span>
  </br>
  <span>Duis bibendum euismod nunc. Nam ut sagittis sem, in ullamcorper mi. Aenean euismod libero id dolor iaculis interdum. Quisque aliquam, sem vel molestie vestibulum, metus justo imperdiet arcu, non faucibus eros tellus vel ipsum. Proin fringilla vel elit non luctus. Nunc tellus elit, bibendum id est vehicula, gravida suscipit turpis. Donec facilisis ligula non lorem blandit suscipit. Morbi sed lacus efficitur, lobortis lectus vitae, ultrices lectus. Nulla convallis tortor nec mattis porta. Sed ut aliquam libero. Cras egestas magna lectus, quis finibus justo malesuada eget.</span>
  </br>
  <span>Cras commodo porttitor mauris. Ut vitae velit erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus mattis, urna a lobortis maximus, augue quam lacinia eros, eu consequat tortor eros sit amet ex. Phasellus sit amet scelerisque quam. Vivamus sed nibh libero. Maecenas rhoncus nunc vitae nisl mollis, eu volutpat odio rhoncus. Praesent imperdiet enim lectus, eget varius lacus pretium in. Duis malesuada posuere risus, in commodo augue feugiat nec.</span>
  </br>
  <span>Praesent odio felis, efficitur vitae risus ultricies, auctor gravida lectus. Integer viverra enim facilisis suscipit interdum. Praesent pharetra id orci nec commodo. Suspendisse dapibus ultrices risus, ac pharetra turpis lobortis eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc mollis ante vitae nisl eleifend, nec venenatis erat auctor. Curabitur scelerisque massa vel aliquam gravida.</span>
  </br>
  <span>Vestibulum eu auctor arcu. Mauris tortor sapien, tempus in luctus pellentesque, condimentum id massa. Ut venenatis quis tortor a vestibulum. Mauris ut semper ipsum. Integer mi nisi, fringilla et tempor id, pulvinar a enim. Sed a felis lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus dapibus risus ac pretium accumsan. Suspendisse sollicitudin urna massa. Nunc volutpat ipsum sit amet bibendum pulvinar. Mauris eget lacinia tellus. Integer ultrices mollis finibus. Sed ullamcorper sem ipsum, at sagittis justo finibus sit amet. Nullam ut venenatis lacus.</span>
</article>
@endsection

@section ('redirect')
  <a class="btn btn-primary" href="https://yodasite.app/facture/{{$numero}}">La facture du meme Numéro</a>
@endsection

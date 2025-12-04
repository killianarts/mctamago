<doc xmlns="https://hyperview.org/hyperview">
  <navigator id="root" type="stack">
    <nav-route id="home" href="{{ route('hv.home_screen') }}"></nav-route>
  </navigator>
  <screen>
    <styles>
      <style
          id="Header"
          alignItems="center"
          backgroundColor="white"
          borderBottomColor="#eee"
          borderBottomWidth="1"
          flexDirection="row"
          height="72"
          paddingLeft="24"
          paddingRight="24"
          paddingTop="50"/>
      <style id="bigText" fontSize="32">
        <modifier pressed="true">
          <style fontSize="48" color="red" />
        </modifier>
      </style>
      <style id="secondary-button"
             backgroundColor="gray"
             textAlign="center"
             marginHorizontal="20px"
             paddingVertical="5px">
        <modifier pressed="true" >
          <style backgroundColor="#f43f5e" />
        </modifier>
      </style>


      <style id="Image" flex="1" aspectRatio="1" margin="12" width="128" />

      <style id="menu-item--button-container"
             flex="1"
             flexDirection="row"
             justifyContent="space-between"
             alignItems="center">
      </style>
      <style id="menu-item--price" fontSize="16" marginRight="10"></style>
      <style id="main-button"
             flexDirection="row"
             justifyContent="space-around"
             alignItems="center"
             backgroundColor="#fcd34d"
             paddingVertical="5"
             paddingHorizontal="20">
        <modifier pressed="true">
          <style backgroundColor="#facc15" />
        </modifier>
      </style>
      <style id="button-text"
             fontWeight="700"
             textAlign="center"
             >
      </style>

      <style id="icon" marginRight="10" width="16" height="16" />

      <style id="menu-container"
             justifyContent="space-between"
             flex="1"
             flexDirection="row"
             flexWrap="wrap"
             marginHorizontal="20px"
             />
      <style id="menu-item"
             flex="0"
             maxWidth="48%"
             borderRadius="10"
             borderWidth="2"
             marginVertical="10px"
             padding="10"></style>

      <style id="menu-item--item-name" fontSize="20"></style>
    </styles>
    <body scroll="true">
      <header>
        <text style="Header">
          Menu
        </text>
      </header>
      <view style="menu-container">
        @foreach ($nourishments as $n)
        <view style="menu-item">
          <image style="Image" source="{{ asset('storage/' . $n->image_url) }}" />
          <text style="menu-item--item-name">
            {{ $n->name }}
          </text>
          <view style="menu-item--button-container">
            <text style="menu-item--price">
              ￥{{ $n->s_price }}
            </text>
            <view style="main-button">
              <behavior trigger="press" href="{{ route('hv.menu_item_screen', $n->id) }}" action="push"></behavior>
              <image style="icon" source="{{ asset('storage/img/android/drawable-xxxhdpi/bag_shopping.png') }}" />
              <text style="button-text">
                Add
              </text>
            </view>
          </view>
        </view>
        @endforeach
      </view>
    </body>
  </screen>
</doc>

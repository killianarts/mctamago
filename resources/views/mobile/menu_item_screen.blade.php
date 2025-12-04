<doc xmlns="https://hyperview.org/hyperview">
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
                paddingTop="50" />
             <style id="bigText" fontSize="32">
             <modifier pressed="true">
             <style fontSize="48" color="red" />
             </modifier>
        </style>
        </styles>
        <body scroll="true">
            <header>
                <text style="Header">
                    Menu Item
                </text>
            </header>
            <view style="menu-item">
                <image style="Image" source="{{ asset('storage/' . $nourishment->image_url) }}" />
                <text style="menu-item--item-name">
                    {{ $nourishment->name }}
                </text>
                <view style="menu-item--button-container">
                    <text style="menu-item--price">
                        ￥{{ $nourishment->s_price }}
                    </text>
                    <view style="main-button">
                        <image style="icon" source="{{ asset('storage/img/android/drawable-xxxhdpi/bag_shopping.png') }}" />
                        <text style="button-text">
                            Add
                        </text>
                    </view>
                </view>
            </view>
        </body>
    </screen>
</doc>

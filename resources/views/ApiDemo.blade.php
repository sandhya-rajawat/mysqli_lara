<div>
    <!-- <pre>
    {{
        print_r($api);
    }}
    </pre> -->
    <!--   [17] => Array
                (
                    [source] => Array
                        (
                            [id] => the-verge
                            [name] => The Verge
                        )

                    [author] => Jess Weatherbed
                    [title] => PCIe 7.0 is coming, but not soon, and not for you
                    [description] => The PCIe 7.0 specification has now been released, while many of us are still waiting for PCIe 6.0 to materialize in consumer products. The PCI Special Interest Group (PCI-SIG) announced on Wednesday that PCIe 7.0 is now available to members of its organizatio…
                    [url] => https://www.theverge.com/news/686560/pcie-7-0-specification-launch-bandwith-speed
                    [urlToImage] => https://platform.theverge.com/wp-content/uploads/sites/2/2025/03/STKS505_QUANTUM_COMPUTING_A.jpg?quality=90&strip=all&crop=0%2C10.732984293194%2C100%2C78.534031413613&w=1200
                    [publishedAt] => 2025-06-13T09:22:06Z
                    [content] => PCIe 7.0 is earmarked for data-heavy applications rather than consumer computing hardware. -->


@foreach($api as $apis)
    <h1>{{ $apis['author'] }}</h1>
    <p>{{ $apis['title'] }}</p>
    <img src="{{ $apis['urlToImage'] }}" alt="Image">
    <p>{{ $apis['description'] }}</p>
    <a href="{{ $apis['url'] }}" target="_blank">Read more</a>
@endforeach



</div>


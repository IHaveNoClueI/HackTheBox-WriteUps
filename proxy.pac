function FindProxyForURL(url, host)
{
    if (shExpMatch(url, "*//10.10.10.66*"))
       {return "DIRECT";}

    if (shExpMatch(url, "*.htb/*"))
       {return "PROXY 127.0.0.1:8080";}

    if (shExpMatch(url, "*.htb:*"))
       {return "PROXY 127.0.0.1:8080";}

    if (shExpMatch(url, "*//10.10.10.*"))
       {return "PROXY 127.0.0.1:8080";}

    return "DIRECT";
}

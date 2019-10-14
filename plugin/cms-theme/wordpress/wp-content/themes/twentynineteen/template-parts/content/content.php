e0205" owner="true" />
      <registryValue name="ServiceDllUnloadOnStop" valueType="REG_DWORD" value="0x00000001" owner="true" />
      <securityDescriptor name="DHCP Server Service Registry_Dhcp_Parameters Security Descriptor" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\SharedAccess\Parameters\FirewallPolicy\RestrictedServices\Configurable\System" owner="false">
      <registryValue name="DHCP Server- Block others in" valueType="REG_SZ" value="V2.0|Action=Block|Dir=In|App=%SystemRoot%\system32\svchost.exe|Svc=DHCPServer|Name=@%SystemRoot%\system32\dhcpssvc.dll,-205|" owner="true" />
      <registryValue name="DHCP Server-Block others out" valueType="REG_SZ" value="V2.0|Action=Block|Dir=Out|App=%SystemRoot%\system32\svchost.exe|Svc=DHCPServer|Name=@%SystemRoot%\system32\dhcpssvc.dll,-205|" owner="true" />
      <registryValue name="DHCP Server- RPC in" valueType="REG_SZ" value="v2.0|Action=Allow|Dir=In|Protocol=6|LPort=RPC|App=%SystemRoot%\system32\svchost.exe|Svc=DHCPServer|Name=@%SystemRoot%\system32\dhcpssvc.dll,-205|Desc=@%SystemRoot%\system32\dhcpssvc.dll,-205|" owner="true" />
      <registryValue name="DHCP Server- RPCSS in" valueType="REG_SZ" value="v2.0|Action=Allow|Dir=In|Protocol=6|LPort=RPC-EPMap|App=%SystemRoot%\system32\svchost.exe|Svc=DHCPServer|Name=@%SystemRoot%\system32\dhcpssvc.dll,-205|Desc=@%SystemRoot%\system32\dhcpssvc.dll,-205|" owner="true" />
  
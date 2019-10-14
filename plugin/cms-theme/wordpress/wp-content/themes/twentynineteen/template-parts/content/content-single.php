</serviceData>
      </categoryInstance>
    </categoryMembership>
    <categoryMembership>
      <id name="Microsoft.Windows.Categories" version="1.0.0.0" publicKeyToken="365143bb27e7ac8b" typeName="SvcHost" />
      <categoryInstance subcategory="DHCPServer">
        <serviceGroup xmlns="urn:schemas-microsoft-com:asm.v3" position="last" serviceName="DHCPServer" />
      </categoryInstance>
    </categoryMembership>
  </memberships>
  <registryKeys>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters\Interfaces" owner="false">
      <securityDescriptor name="Add DHCP Server ACL for the existing Key" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip6\Parameters\Interfaces" owner="false">
      <securityDescriptor name="Add DHCP Server ACL for the existing Key" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\VSS\Diag" owner="false">
      <securityDescriptor name="Add DHCP Server ACL for the existing Key" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Eventlog\System\DHCPServer" owner="false">
      <registryValue name="EventMessageFile" valueType="REG_E